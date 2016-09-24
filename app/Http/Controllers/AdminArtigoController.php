<?php

namespace App\Http\Controllers;

use App\Artigo;
use App\Categoria;
use App\Setor;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class AdminArtigoController extends Controller
{
    private $artigo;

    public function __construct(Artigo $artigo)
    {
        $this->artigo = $artigo;

        if(Gate::denies('master-lider')){

            abort(403, 'Acesso negado!');

        }

        $this->artigo->inativaArtigo();
    }

    public function  index()
    {

        $artigos = (Auth::user()->nivel_de_acesso == 2 ? $this->artigo->paginate(10) : $this->artigo->where('setor_id', Auth::user()->setor_id)->paginate(10));

        return view('admin.artigo.index',compact('artigos'));
    }


    public function cadastrar(Setor $setor, Categoria $categoria)
    {


        $setores = $setor->all();
        $categorias = $categoria->all();


        return view('admin.artigo.cadastrar',compact('categorias','setores'));
    }


    public function store(Requests\RequestArtigo $request, User $user)
    {

        if(Auth::user()->nivel_de_acesso == 1 || Auth::user()->nivel_de_acesso == 0) {

            $user = $user->find(Auth::user()->id);

            $depto = $user->setor->id;

            $request->request->add(['setor_id' => $depto]);

        }

        $request->request->add(['user_id' => Auth::user()->id]);

        $artigo = $this->artigo->create($request->all());

        return redirect()->route('artigo.index');
    }

    public function edit($id, Setor $setor, User $user, Categoria $categoria)
    {
        $users = $user->all();
        $setores = $setor->all();
        $categorias = $categoria->all();

        $artigo = $this->artigo->find($id);

        return view ('admin.artigo.edit', compact('artigo','categorias','setores','users'));
    }


    public function update(Requests\RequestArtigo $request, $id)
    {
        $artigo = $this->artigo->find($id);

        $artigo->update($request->all());


        return redirect()->route('artigo.index');
    }


    public function destroy($id){

        $this->artigo->find($id)->delete();

        return redirect()->route('artigo.index');
    }

    public function aprovar($id)
    {

        $artigo = $this->artigo->find($id);

        $boolean = $artigo->status_aprovacao;

        $this->artigo->where('id', $id)->update(['status_aprovacao' => ($boolean == false ? true : false)]);

        return redirect()->route('artigo.index');
    }

    public function favorito($id)
    {
        $artigo = $this->artigo->find($id);

        $boolean = $artigo->favorito;

        $this->artigo->where('id', $id)->update(['favorito' => ($boolean == false ? true : false)]);

        return redirect()->route('artigo.index');
    }
}

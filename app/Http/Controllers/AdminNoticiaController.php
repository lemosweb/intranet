<?php

namespace App\Http\Controllers;


use App\CategoriaNoticia;
use Illuminate\Http\Request;
use App\Setor;
use App\Noticia;
use App\User;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class AdminNoticiaController extends Controller
{
    private $noticia;

    public function __construct(Noticia $noticia)
    {
        $this->noticia = $noticia;

        if(Gate::denies('master-lider')){

            abort(403, 'Acesso negado!');

        }

        $this->noticia->inativaNoticia();
    }

    public function  index()
    {

        $noticias = (Auth::user()->nivel_de_acesso == 2 ? $this->noticia->paginate(10) : $this->noticia->where('setor_id', Auth::user()->setor_id)->paginate(10));

        return view('admin.noticia.index',compact('noticias'));
    }


    public function cadastrar(Setor $setor, CategoriaNoticia $categoria)
    {


        $setores = $setor->all();
        $categorias = $categoria->all();


        return view('admin.noticia.cadastrar',compact('categorias','setores'));
    }


    public function store(Request $request, User $user)
    {

        if(Auth::user()->nivel_de_acesso == 1 || Auth::user()->nivel_de_acesso == 0) {

            $user = $user->find(Auth::user()->id);

            $depto = $user->setor->id;

            $request->request->add(['setor_id' => $depto]);

        }

        $request->request->add(['user_id' => Auth::user()->id]);

        $noticia = $this->noticia->create($request->all());

        return redirect()->route('noticia.index');
    }

    public function edit($id, Setor $setor, User $user, CategoriaNoticia $categoria)
    {
        $users = $user->all();
        $setores = $setor->all();
        $categorias = $categoria->all();


        $noticia = $this->noticia->find($id);


        return view ('admin.noticia.edit', compact('noticia','categorias','setores','users'));
    }


    public function update(Request $request, $id)
    {
        $noticia = $this->noticia->find($id);

        $noticia->update($request->all());


        return redirect()->route('noticia.index');
    }


    public function destroy($id){

        $this->noticia->find($id)->delete();

        return redirect()->route('noticia.index');
    }

    public function aprovar($id)
    {

        $noticia = $this->noticia->find($id);

        $boolean = $noticia->status_aprovacao;

        $this->noticia->where('id', $id)->update(['status_aprovacao' => ($boolean == false ? true : false)]);

        return redirect()->route('noticia.index');
    }

    public function favorito($id)
    {
        $noticia = $this->noticia->find($id);

        $boolean = $noticia->favorito;

        $this->noticia->where('id', $id)->update(['favorito' => ($boolean == false ? true : false)]);

        return redirect()->route('noticia.index');
    }
}

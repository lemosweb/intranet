<?php

namespace App\Http\Controllers;

use App\Artigo;
use App\Categoria;
use App\Setor;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminArtigoController extends Controller
{
    private $artigo;

    public function __construct(Artigo $artigo)
    {
        $this->artigo = $artigo;
    }

    public function  index()
    {

        $artigos = $this->artigo->paginate(5);

        return view('admin.artigo.index',compact('artigos'));
    }


    public function cadastrar(Setor $setor, User $user, Categoria $categoria)
    {

        $users = $user->all();
        $setores = $setor->all();
        $categorias = $categoria->all();


        return view('admin.artigo.cadastrar',compact('categorias','setores','users'));
    }


    public function store(Request $request)
    {
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


    public function update(Request $request, $id)
    {
        $artigo = $this->artigo->find($id);

        $artigo->update($request->all());


        return redirect()->route('artigo.index');
    }


    public function destroy($id){

        $this->artigo->find($id)->delete();

        return redirect()->route('artigo.index');
    }
}

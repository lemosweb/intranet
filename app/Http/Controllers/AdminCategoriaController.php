<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminCategoriaController extends Controller
{
    private $categoria;

    public function __construct(Categoria $categoria)
    {
        $this->categoria = $categoria;
    }

    public function  index()
    {

        $categorias = $this->categoria->paginate(5);

        return view('admin.categoria.index',compact('categorias'));
    }


    public function cadastrar()
    {
        return view('admin.categoria.cadastrar');
    }


    public function store(Request $request)
    {
        $categoria = $this->categoria->create($request->all());

        return redirect()->route('categoria.index');
    }

    public function edit($id)
    {

        $categoria = $this->categoria->find($id);


        return view ('admin.categoria.edit', compact('categoria'));
    }


    public function update(Request $request, $id)
    {
        $categoria = $this->categoria->find($id);

        $categoria->update($request->all());


        return redirect()->route('categoria.index');
    }


    public function destroy($id){

        $this->categoria->find($id)->delete();

        return redirect()->route('categoria.index');
    }
}

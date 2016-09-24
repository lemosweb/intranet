<?php

namespace App\Http\Controllers;

use App\CategoriaNoticia;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminCategoriaNoticiaController extends Controller
{
    private $categorianoticia;

    public function __construct(CategoriaNoticia $categorianoticia)
    {
        $this->categorianoticia = $categorianoticia;
    }

    public function  index()
    {

        $categorianoticias = $this->categorianoticia->paginate(5);

        return view('admin.categorianoticia.index',compact('categorianoticias'));
    }


    public function cadastrar()
    {
        return view('admin.categorianoticia.cadastrar');
    }


    public function store(Request $request)
    {
        $categorianoticia = $this->categorianoticia->create($request->all());

        return redirect()->route('categorianoticia.index');
    }

    public function edit($id)
    {

        $categorianoticia = $this->categorianoticia->find($id);


        return view ('admin.categorianoticia.edit', compact('categorianoticia'));
    }


    public function update(Request $request, $id)
    {
        $categorianoticia = $this->categorianoticia->find($id);

        $categorianoticia->update($request->all());


        return redirect()->route('categorianoticia.index');
    }


    public function destroy($id){

        $this->categorianoticia->find($id)->delete();

        return redirect()->route('categorianoticia.index');
    }
}

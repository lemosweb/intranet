<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cargo;

class AdminCargoController extends Controller
{
    private $cargo;

    public function __construct(Cargo $cargo)
    {
        $this->cargo = $cargo;
    }

    public function  index()
    {

        $cargos = $this->cargo->paginate(5);

        return view('admin.cargo.index',compact('cargos'));
    }


    public function cadastrar()
    {

        return view('admin.cargo.cadastrar');
    }


    public function store(Request $request)
    {
        $cargo = $this->cargo->create($request->all());

        return redirect()->route('cargo.index');
    }

    public function edit($id)
    {


        $cargo = $this->cargo->find($id);


        return view ('admin.cargo.edit', compact('cargo'));
    }


    public function update(Request $request, $id)
    {
        $cargo = $this->cargo->find($id);

        $cargo->update($request->all());


        return redirect()->route('cargo.index');
    }


    public function destroy($id){

        $this->cargo->find($id)->delete();

        return redirect()->route('cargo.index');
    }
}

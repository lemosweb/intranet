<?php

namespace App\Http\Controllers;

use App\Setor;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;


class AdminSetorController extends Controller
{

    private $setor;

    public function __construct(Setor $setor)
    {
        $this->setor = $setor;


        if(Gate::denies('only-master')){

            abort(403, 'Acesso negado!');

        }

    }

    public function  index()
    {

        $setores = $this->setor->paginate(5);



        return view('admin.setor.index',compact('setores'));
    }


    public function cadastrar()
    {
        return view('admin.setor.cadastrar');
    }


    public function store(Requests\SetorRequest $request)
    {
        $setor = $this->setor->create($request->all());

        return redirect()->route('setor.index');
    }

    public function edit($id)
    {

        $setor = $this->setor->find($id);


        return view ('admin.setor.edit', compact('setor'));
    }


    public function update(Requests\SetorRequest $request, $id)
    {
        $setor = $this->setor->find($id);

        $setor->update($request->all());


        return redirect()->route('setor.index');
    }


    public function destroy($id){

        $this->setor->find($id)->delete();

        return redirect()->route('setor.index');
    }


}

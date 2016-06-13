<?php

namespace App\Http\Controllers;

use App\Cargo;
use App\Setor;
use App\User;
use Illuminate\Http\Request;
use App\Vaga;
use App\Http\Requests;
use Illuminate\Support\Facades\Gate;

class AdminVagaController extends Controller
{
    private $vaga;

    public function __construct(Vaga $vaga)
    {
        $this->vaga = $vaga;

        if(Gate::denies('master-lider')){

            abort(403, 'Acesso negado!');

        }

        $this->vaga->inativaVaga();
    }

    public function  index()
    {

        $vagas = $this->vaga->paginate(5);

        return view('admin.vaga.index',compact('vagas'));
    }


    public function cadastrar(Setor $setor, User $user, Cargo $cargo)
    {
        $cargos = $cargo->all();
        $setores = $setor->all();
        $users = $user->all();


        return view('admin.vaga.cadastrar',compact('cargos','setores','users'));
    }


    public function store(Request $request)
    {
        $vaga = $this->vaga->create($request->all());

        return redirect()->route('vaga.index');
    }

    public function edit($id, Setor $setor, User $user, Cargo $cargo)
    {
        $users = $user->all();
        $setores = $setor->all();
        $cargos = $cargo->all();


        $vaga = $this->vaga->find($id);


        return view ('admin.vaga.edit', compact('vaga','cargos','setores','users'));
    }


    public function update(Request $request, $id)
    {
        $vaga = $this->vaga->find($id);

        $vaga->update($request->all());


        return redirect()->route('vaga.index');
    }


    public function destroy($id){

        $this->vaga->find($id)->delete();

        return redirect()->route('vaga.index');
    }
}

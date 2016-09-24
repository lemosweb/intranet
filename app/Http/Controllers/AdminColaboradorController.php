<?php

namespace App\Http\Controllers;

use App\Cargo;
use App\Setor;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class AdminColaboradorController extends Controller
{
    private $colaborador;

    public function __construct(User $colaborador)
    {
        $this->colaborador = $colaborador;
    }

    public function  index()
    {



            $colaboradores = (Auth::user()->nivel_de_acesso == 2 ? $this->colaborador->paginate(6) : $this->colaborador->where('setor_id', Auth::user()->setor_id)->paginate(6));






        return view('admin.colaborador.index',compact('colaboradores'));
    }


    public function cadastrar(Cargo $cargo, Setor $setor)
    {
        $setores = $setor->all();
        $cargos = $cargo->all();

        return view('admin.colaborador.cadastrar',compact('cargos','setores'));
    }


    public function store(Request $request)
    {

        $nome = $request->input('password');

        $nomeCrypt = bcrypt($nome);

        $request->request->add(['password' => $nomeCrypt]);


        //dd($request->all());
        $this->colaborador->create($request->all());

        return redirect()->route('colaborador.index');
    }

    public function edit($id, Cargo $cargo, Setor $setor)
    {
        $setores = $setor->all();
        $cargos = $cargo->all();

        $colaborador = $this->colaborador->find($id);


        return view ('admin.colaborador.edit', compact('colaborador','setores','cargos'));
    }


    public function update(Request $request, $id)
    {

        $nome = $request->input('password');

        $nomeCrypt = bcrypt($nome);

        $request->request->add(['password' => $nomeCrypt]);

        $colaborador = $this->colaborador->find($id);

        $colaborador->update($request->all());


        return redirect()->route('colaborador.index');
    }


    public function destroy($id){

        $this->colaborador->find($id)->delete();

        return redirect()->route('colaborador.index');
    }
}

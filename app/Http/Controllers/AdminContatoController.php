<?php

namespace App\Http\Controllers;

use App\Contato;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;

class AdminContatoController extends Controller
{
    private $contato;

    public function __construct(Contato $contato)
    {
        $this->contato = $contato;
    }

    public function  index()
    {

        $contatos = $this->contato->paginate(5);

        return view('admin.contato.index',compact('contatos'));
    }


    public function cadastrar(User $user)
    {

        $users = $user->all();


        return view('admin.contato.cadastrar',compact('users'));
    }


    public function store(Request $request)
    {
        $contato = $this->contato->create($request->all());

        return redirect()->route('contato.index');
    }

    public function edit($id, User $user)
    {

        $users = $user->all();

        $contato = $this->contato->find($id);


        return view ('admin.contato.edit', compact('contato','users'));
    }

    public function update($id, Request $request)
    {
        $contato = $this->contato->find($id);

        $contato->update($request->all());

        return redirect()->route('contato.index');
    }




    public function destroy($id){

        $this->contato->find($id)->delete();

        return redirect()->route('contato.index');
    }


}

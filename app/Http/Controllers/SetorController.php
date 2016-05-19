<?php

namespace App\Http\Controllers;

use App\Setor;
use Illuminate\Http\Request;
use App\Http\Requests;

class SetorController extends Controller
{

    private $setor;

    public function __construct(Setor $setor)
    {
        $this->setor = $setor;
    }

    public function  index()
    {

        $setores = $this->setor->paginate(5);

        return view('setor.index',compact('setores'));
    }


    public function cadastrar()
    {
        return view('setor.cadastrar');
    }


    public function store(Request $request)
    {
        $setor = $this->setor->create($request->all());

        return redirect()->route('setor.index');
    }
}

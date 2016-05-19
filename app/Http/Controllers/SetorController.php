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
}

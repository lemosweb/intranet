<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VagaController extends Controller
{
    public function index()
    {
        return view('vaga/index');
    }
}

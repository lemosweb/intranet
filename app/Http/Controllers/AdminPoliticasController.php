<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminPoliticasController extends Controller
{
    public function index()
    {
        return view('admin.politicas.index');
    }

    public function cadastrar()
    {
        return view('admin.politicas.cadastrar');
    }


}

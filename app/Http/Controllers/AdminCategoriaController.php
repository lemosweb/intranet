<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminCategoriaController extends Controller
{
    public function  index()
    {
        return view('categoria.index');
    }
}

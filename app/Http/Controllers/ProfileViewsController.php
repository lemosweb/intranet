<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProfileViewsController extends Controller
{
    public function index()
    {
        return view('profile.index');

    }

    public function favorito()
    {
        //return redirect()->back();
    }








}

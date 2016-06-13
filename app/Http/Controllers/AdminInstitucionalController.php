<?php

namespace App\Http\Controllers;

use App\Institucional;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminInstitucionalController extends Controller
{
    private $institucional;

    public function __construct(Institucional $institucional)
    {
        $this->institucional = $institucional;
    }

    public function index()
    {
        $institucional = $this->institucional->all();

        return view('admin.institucional.index',compact('institucional'));
    }

    public function edit(Request $request, $id)
    {

        $institucional = $this->institucional->find($id);

        return view('admin.institucional.edit', compact('institucional'));
    }


    public function update(Request $request, $id)
    {

        $this->institucional->find($id)->update($request->all());

        return redirect()->route('institucional.index');
    }


}

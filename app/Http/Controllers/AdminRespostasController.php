<?php

namespace App\Http\Controllers;

use App\Enquete;
use App\Resposta;
use Illuminate\Http\Request;


class AdminRespostasController extends Controller
{
    private $enquete;
    private $resposta;


    public function __construct(Resposta $resposta, Enquete $enquete)
    {
        $this->resposta = $resposta;
        $this->enquete = $enquete;
    }


    public function index($id)
    {

        $enquete = $this->enquete->find($id);

        //dd($enquete->respostas);

        return view('admin.respostas.index', compact('enquete'));
    }

    public function cadastrar($id)

    {
       // dd($enquete);

        return view('admin.respostas.cadastrar',compact('id'));
    }


    public function store(Request $request, $id)
    {

        $this->resposta->create($request->all());

        $this->resposta->ativaEnquete($id);

        return redirect()->route('respostas.index', ['id' => $id]);
    }

    public function edit($id)
    {

        $resposta = $this->resposta->find($id);


        return view ('admin.respostas.edit', compact('resposta','id'));
    }


    public function update(Request $request, $id)
    {

        $resposta = Resposta::find($id);

        $id = $resposta->enquete_id;

        $resposta->update($request->all());

        return redirect()->route('respostas.index', $id);
    }


    public function destroy($id)
    {

        $resposta = $this->resposta->find($id);

        $id = $resposta->enquete_id;

        $resposta->delete();

        return redirect()->route('respostas.index', $id);
    }
}

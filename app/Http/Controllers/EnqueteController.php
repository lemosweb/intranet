<?php

namespace App\Http\Controllers;

use App\Enquete;
use App\Resposta;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class EnqueteController extends Controller
{
    private $enquete;
    private $resposta;

    public function __construct(Enquete $enquete, Resposta $resposta)
    {
        $this->enquete = $enquete;
        $this->resposta = $resposta;

        $this->enquete->inativaEnquete();
    }

    public function index()
    {
        //dd($this->enquete->inativaEnquete());

        $enquetes = $this->enquete->carregarEnquete();

        $enqueteAdmin = $this->enquete->where('user_id', Auth::user()->id)->where('status', '1')->first();

        return view('admin.enqueteview.index',compact('enquetes','enqueteAdmin'));

    }

    public function store(Request $request)
    {

        $resposta = $this->resposta->find($request->input('resposta','enqueteAdmin'));

        $userId = Auth::id();

        $enqueteId =  $resposta->enquete_id;

        if($this->resposta->verificaSeJaVotou($resposta->enquete_id, $userId )){

            return redirect()->route('enqueteview.votado', ['id' => $enqueteId]);

        }else{

            $this->resposta->validaVoto($resposta->enquete_id);

            $this->resposta->contaVoto($request->input('resposta'));

            return redirect()->route('enqueteview.index');

        }
    }

    public function votado($id)
    {

        $resultado = $this->enquete->find($id);

        return view('admin.enqueteview.votado',compact('resultado'));

    }

}

<?php

namespace App\Http\Controllers;

use App\Enquete;
use App\Resposta;
use App\Setor;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class AdminEnqueteController extends Controller
{

    private $enquete;

    public function __construct(Enquete $enquete)
    {

        $this->enquete = $enquete;

        $this->enquete->inativaEnquete();

    }
    public function index()
    {

        $enquetes  = (Auth::user()->nivel_de_acesso == 2 ? $this->enquete->paginate(10) : $this->enquete->where('setor_id', Auth::user()->setor_id)->paginate(10));



        return view('admin.enquete.index',compact('enquetes', 'message'));
    }

    public function cadastrar(Setor $setor)
    {
        $setores = $setor->all();

        return view('admin.enquete.cadastrar', compact('setores'));
    }


    public function store(Request $request, User $user, Setor $setor)
    {

            if($this->enquete->limitarEnquete()){

                $message = 'Já há uma enquete em vigência para o seu setor';

                $setores = $setor->all();

                return view('admin.enquete.cadastrar', compact('message','setores'));

            }

            $user = $user->find(Auth::user()->id);


            if($request->input('setor_id') != 2){

                $depto = $user->setor->id;

                $request->request->add(['setor_id' => $depto]);

            }

            $request->request->add(['user_id' => Auth::user()->id]);


                $enquete = $this->enquete->create($request->all());

                $id = $enquete->id;



                //$message = 'Enquete cadastrada com sucesso!';

                return redirect()->route('respostas.index', ['id' => $id]);



    }

    public function edit($id)
    {

        $enquete = $this->enquete->find($id);


        return view ('admin.enquete.edit', compact('enquete'));
    }


    public function update(Request $request, $id)
    {


        $enquete = $this->enquete->find($id);

        $enquete->update($request->all());

        return redirect()->route('enquete.index');
    }


    public function destroy($id)
    {

        $this->enquete->find($id)->delete();



        return redirect()->route('enquete.index');
    }

}

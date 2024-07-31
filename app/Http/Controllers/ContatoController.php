<?php

namespace App\Http\Controllers;

use App\Mail\ContatoEmail;
use App\Models\Contato;
use App\Models\newLetter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContatoController extends Controller
{
    public function index(){
        return view('site.contato');
    }

    public function salvarNoBanco(Request $request){

        $dados = $request->json()->all();

        $validarDados = Validator::make($dados, [

            'nomeContato' => 'required|max:100',
            'emailContato' => 'required|email|max:100',
            'assuntoContato' => 'required|max:100',
            'mensContato' => 'required',

        ]);


        if ($validarDados->fails()){
            return response()->json(['errors' => $validarDados->errors()], 422);
        } else {
            $contato = Contato::create($validarDados->validated());

            // por email so aqui, no outro nao
        Mail::to('cloudwise@smpsistema.com.br')->send(new ContatoEmail($contato));

        return response()->json(['sucess' => 'Email registrado com sucesso!']);

        }

    }


    //------------------
    //newsletter
    //------------------

    public function salvarNoEmail(Request $request)
    {
        $dados = $request->json()->all();

        // Definindo mensagens de erro em português
        $messages = [
            'required' => 'O campo :attribute é obrigatório.',
            'email' => 'O :attribute deve ser um endereço de e-mail válido.',
            'max' => 'O :attribute não pode ter mais de :max caracteres.',
        ];

        $validarDadosNew = Validator::make($dados, [
            'emailNews' => 'required|email|max:100'
        ], $messages);

        if ($validarDadosNew->fails()) {
            return response()->json(['errors' => $validarDadosNew->errors()], 422);
        } else {
            newLetter::create($validarDadosNew->validated());
            return response()->json(['success' => 'Email salvo com sucesso!']);
        }
    }
}










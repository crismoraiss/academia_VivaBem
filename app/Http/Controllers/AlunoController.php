<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Usuario;

class AlunoController extends Controller
{

    public function aluno()
    {
        // return view('dashboard.aluno.aluno');
          // Recuperando o ID do aluno da sessão
          $idAluno = session('id');

          // Buscando o aluno pelo ID no banco de dados
          $aluno = Aluno::find($idAluno);

          // Verificando se o aluno foi encontrado
          if ( !$aluno ) {
              // Se o aluno não for encontrado, você pode redirecionar para uma página de erro ou fazer outra ação adequada
              abort(404, 'Aluno não encontrado');
          }

          // Passando o objeto $aluno para a view
          // dd($aluno);
          return view('dashboard.aluno.aluno', compact('aluno'));
    }

// api do aluno
    public function login(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email',
            'senha' => 'required',
        ]);

        $usuario = Usuario::where('email', $credentials['email'])->where('senha', $credentials['senha'])->first();

        if ($usuario && $usuario->tipo_usuario_type === 'Aluno') {

            $aluno = $usuario->tipo_usuario()->first();

            if ($aluno) {

                $token = $usuario->createToken('Token de Acesso')->plainTextToken;

                return response()->json([
                    'message' => 'Login bem sucedido',
                    'usuario' => [
                        'id' => $usuario->idUsuario,
                        'nome' => $usuario->nome,
                        'email' => $usuario->email,
                        'tipo_usuario' => $usuario->tipo_usuario_type,
                        'dados_aluno' => [
                            'idAluno'=> $aluno->idAlunoo,
                            'nome' => $aluno->nomeAlunoo,
                        ],
                    ],

                    'acess_token' => $token,
                    'token_type' => 'Bearer',

                ]);
            }
        }

        return response()->json(['message' => 'Credenciais invalidas ou usuario nao é um aluno'], 401);
    }

}

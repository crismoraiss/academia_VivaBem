<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Funcionario;
use App\Models\Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login');
    }

    public function autenticar(Request $request)
    {


        $regras = [

            'email' => 'required|email',
            'password' => 'required'
        ];
        // Valida os campos 'email' e 'password', e deixando elas obrigatarias


        $msg = [
            'email.required' => 'O campo de email é obrigatório',
            'email.email' => 'O e-mail não é valido',
            'password.required' => 'O campo de senha é obrigatório'
        ];

        // mensagens de erro para exibir em caso de erro na hora de acessar.

        $request->validate($regras, $msg);

        // mostrar os erros caso de errado ao tentar validar

        $email = $request->get('email');
        $senha = $request->get('password');

        // Os valores fornecidos no formulário.

        // echo "E-mail: $email | Senha: $senha";
        // echo "<br>";


        $usuario = Usuario::where('emailUsuario', $email)->first();
        // esse emailUsuario é referente ao nome que esta no banco

        if (!$usuario) {
            return back()->withErrors(['email' => 'O email informado não esta cadrastado']);
        }

        if ($usuario->senhaUsuario != $senha) {
            return back()->withErrors(['password' => 'Senha incorreta']);
        }
        // dd($usuario);

        $tipoUsuario = $usuario->tipo_usuario;
        // $tipo = null;
        // dd($tipoUsuario);



        // session([
        //     'email' => $usuario->email,
        // ]);
        // pq nao tenho email no funcionario

        if($tipoUsuario instanceof Aluno){
        //    dd($tipoUsuario);
        // $tipo = 'aluno';

            session([

                'id'           => $tipoUsuario->idAlunoo,
                'nome'         => $tipoUsuario->nomeAlunoo,
                'tipo_usuario' => 'Aluno',
                'email' => $tipoUsuario->emailAlunoo,

            ]);
            // variavel da session, nomes de acordo com o banco

           return redirect()->route('dashboard.aluno.aluno');



        }elseif($tipoUsuario instanceof Funcionario){ 
            // dd($tipoUsuario);



            if($tipoUsuario->tipoFuncionario =='administrativo'){
                // dd($tipoUsuario);
                // $tipo = 'administrativo';

                session([
                    'id'           => $tipoUsuario->idFuncionario,
                    'nome'         => $tipoUsuario->nomeFuncionario,
                    'email'        => $tipoUsuario->emailFuncionario,
                    'tipo_usuario' => $tipoUsuario->tipoFuncionario,
                ]);

                // variavel da session, nomes de acordo com o banco

               return redirect()->route('dashboard.administrador.administrador');



            } elseif ($tipoUsuario->tipoFuncionario == 'instrutor'){
                // dd($tipoUsuario);
                // $tipo = 'instrutor';

                 session([
                'id'           => $tipoUsuario->idFuncionario,
                'nome'         => $tipoUsuario->nomeFuncionario,
                'email'        => $tipoUsuario->emailFuncionario,
                'tipo_usuario' => $tipoUsuario->tipoFuncionario,
                // 'tipo_usuario' => 'instrutor',
            ]);

            // variavel da session, nomes de acordo com o banco

           return redirect()->route('dashboard.instrutor.instrutor');

            }


        }

        return back()->withErrors(['email' => 'Erro desconhecido de autenticação']);
        // retorna a pag de origem, e mostra o errro

        // o if faz uma verificação geral, se os dados estão corretos e mostra os dados inseridos ou se por acaso esteja errado ele mostra o erro
    }


}

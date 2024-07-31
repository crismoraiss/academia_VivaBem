<?php

namespace App\Http\Middleware;

use App\Models\Usuario;
use App\Models\Aluno;
use App\Models\Funcionario;
use Closure;
use Illuminate\Http\Request;

class AutAcademiaMiddle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $tipoUser)
    {

        $email = session('email');

        if ($email) {

            $usuario = Usuario::where('emailUsuario', $email)->first();

            if (!$usuario) {
                return redirect()->route('login')->withErrors(['email' => 'Não autenticado']);
            }

            $tipoUsuario = $usuario->tipo_usuario;


            if ($tipoUsuario) {
                            $tipo = null;

                            if ($tipoUsuario instanceof Aluno) {
                                $tipo = 'aluno';

                            } else if($tipoUsuario instanceof Funcionario) {
                                $tipo = $tipoUsuario->tipoFuncionario;
                                //  if ($tipoUsuario->tipoFuncionario == 'administrativo') {
                                //      $tipo = 'administrativo';
                                //  }elseif ($tipoUsuario->tipoFuncionario == 'instrutor'){
                                //      $tipo = 'instrutor';
                                //  }
                            }

                            //  dd($tipo);
                            //    dd($request, $tipo);

                        }
                        if ($tipo === $tipoUser) {
                            return $next($request);
                            // dd($tipo);
                        }
                        else {
                            return back()->withErrors(['email' => 'Acesso não permitido para esse perfil']);
                        }
                    }
                }
            }

//php artisan make:middleware AutAcademiaMiddle criamos essa pagina com isso

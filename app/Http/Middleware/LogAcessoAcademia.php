<?php

namespace App\Http\Middleware;

use App\Models\LogAcesso;
use Closure;
use Illuminate\Http\Request;

class LogAcessoAcademia
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
         // return $next($request);

        // return Response('Cheguei aqui');
        // para saber se esta funcionando
        // qunado o cliente fizer alguma requisicao, o middeleware vai ajudar nisso

        // dd($request);

        $ip = $request->server->get('REMOTE_ADDR');
        $url = $request->getRequestUri();
        // dd($ip);
        // para encontrar apenas o ip de todos os dados que ficam amostra

        LogAcesso::create(['log' => "IP: $ip requisitou na rota: $url da aplicação"]);
        //vai salvar um registro ao banco de dados
        // log referente a pagina de models

        return $next($request);

    }
}


// primeiro criamos atraves do php artisan make:middleware EnsureTokenIsValid

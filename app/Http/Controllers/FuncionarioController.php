<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function instrutor()
    {
        // Recuperando o ID do funcionário da sessão
        $idFuncionario = session('id');

        // Buscando o funcionário pelo ID no banco de dados
        $funcionario = Funcionario::find($idFuncionario);

        // Verificando se o funcionário foi encontrado
        if (!$funcionario) {
            // Se o funcionário não for encontrado, você pode redirecionar para uma página de erro ou fazer outra ação adequada
            abort(404, 'Funcionário não encontrado');
        }

        // Passando o objeto $funcionario para a view
        return view('dashboard.instrutor.instrutor', compact('funcionario'));
    }

}

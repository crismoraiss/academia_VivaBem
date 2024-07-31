<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Models\Funcionario;

class AdministradorController extends Controller
{
    public function administrativo()
    {
        // return view('dashboard.instrutor.instrutor');

        // Recuperando o ID do aluno da sessão
        $idFuncionario = session('id');

        // Buscando o aluno pelo ID no banco de dados
        $funcionario = Funcionario::find($idFuncionario);

        // Verificando se o aluno foi encontrado
        if (!$funcionario) {
            // Se o aluno não for encontrado, você pode redirecionar para uma página de erro ou fazer outra ação adequada
            abort(404, 'Funcionario não encontrado');
        }

        // Passando o objeto $aluno para a view
        // dd($aluno);
        return view('dashboard.administrador.administrador', compact('funcionario'));
    }



    // MOSTRAR OS FUNCIONARIOS ATIVOS
    public function indexFunc()
    {
        $idFuncionario = session('id');

        $funcionario = Funcionario::find($idFuncionario);

        $listaFunc = Funcionario::all();

        //dd($funcionario);

        return view('dashboard.administrador.funcionario.index', compact('funcionario', 'listaFunc'));
    }






    // CRIAR FUNCIONARIO NOVO
    public function createFunc(Request $request)
    {
        $idFuncionario = session('id');

        $funcionario = Funcionario::find($idFuncionario);

        if (!$funcionario) {
            abort(404, 'Funcionario nao encontrado');
        }
        return view('dashboard.administrador.funcionario.create', compact('funcionario'));
        //  essa estrtura esta dando erro na minha url, por isso ela nao abre
    }

    // CADASTRAR FUNCIONARIO NOVO
    public function cadFunc(Request $request)
    {
        // $request->merge(['dataInscriçãoFuncionario' => now()]);

        $request->validate([
            'nomeFuncionario' => 'required|string|max:100',
            'emailFuncionario' => 'required|string|max:100',
            'dataNascFuncionario' => 'required|date',
            'telefoneFuncionario' => 'required|string|max:20',
            'enderecoFuncionario' => 'required|string|max:100',
            'cidadeFuncionario' => 'required|string|max:100',
            'estadoFuncionario' => 'required|string|max:100',
            'cepFuncionario' => 'required|string|max:10',
            'dataContratoFuncionario' => 'required|date',
            'cargoFuncionario' => 'required|string|max:50',
            'salarioFuncionario' => 'required|string|max:100',
            'tipoFuncionario' => 'required|string|max:100',
            'statusFuncionario' => 'required|string|max:20',
            'criadoEm' => 'required|date',
            'atualizadoEm' => 'required|date',
        ]);

        $funcionario = new Funcionario();

        $funcionario->nomeFuncionario = $request->input('nomeFuncionario');
        $funcionario->emailFuncionario = $request->input('emailFuncionario');
        $funcionario->dataNascFuncionario = $request->input('dataNascFuncionario');
        $funcionario->telefoneFuncionario = $request->input('telefoneFuncionario');
        $funcionario->enderecoFuncionario = $request->input('enderecoFuncionario');
        $funcionario->cidadeFuncionario = $request->input('cidadeFuncionario');
        $funcionario->estadoFuncionario = $request->input('estadoFuncionario');
        $funcionario->cepFuncionario = $request->input('cepFuncionario');
        $funcionario->dataContratoFuncionario = $request->input('dataContratoFuncionario');
        $funcionario->cargoFuncionario = $request->input('cargoFuncionario');
        $funcionario->salarioFuncionario = $request->input('salarioFuncionario');
        $funcionario->tipoFuncionario = $request->input('tipoFuncionario');
        $funcionario->statusFuncionario = $request->input('statusFuncionario');
        $funcionario->criadoEm = $request->input('criadoEm');
        $funcionario->atualizadoEm = $request->input('atualizadoEm');

        $funcionario->save();

        return redirect()->route('dashboard.administrador.funcionario.index')->with('sucess', 'Aluno cadrastado com sucesso');
    }




     

    // EDITAR/ATUALIZAR FUNCIONARIO
    public function editFunc($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return view('dashboard.administrador.funcionario.edit', compact('funcionario'));
    }

    public function updateFunc(Request $request, $id)
    {
        $request->validate([
            'nomeFuncionario' => 'required',
            'emailFuncionario' => 'required|email',
            'cargoFuncionario' => 'required',
        ]);

        $funcionario = Funcionario::findOrFail($id);
        $funcionario->nomeFuncionario = $request->input('nomeFuncionario');
        $funcionario->emailFuncionario = $request->input('emailFuncionario');
        $funcionario->cargoFuncionario = $request->input('cargoFuncionario');
        $funcionario->save();

        return redirect()->route('dashboard.administrador.funcionario.index')->with('success', 'Funcionário atualizado com sucesso.');
    }


    // DESATIVAR FUNCIONARIO
    public function desativarFunc($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->statusFuncionario = 'inativo'; // Define o status como 'inativo' para desativar o funcionário
        $funcionario->save();

        return redirect()->route('dashboard.administrador.funcionario.index')->with('success', 'Funcionário desativado com sucesso.');
    }

    // TESTAR PARA REATIVAR OS FUNCIONARIOS DESATIVADOS
    // public function reativarFunc($id)
    // {
    //     $funcionario = Funcionario::findOrFail($id);
    //     $funcionario->statusFuncionario = 'ativo'; // Define o status como 'ativo' para reativar o funcionário
    //     $funcionario->save();

    //     return redirect()->route('dashboard.administrador.index')->with('success', 'Funcionário reativado com sucesso.');
    // }



    // *****************************************   ADM / ALUNO **************************************************************************

     // MOSTRAR OS FUNCIONARIOS ATIVOS
     public function indexAluno()
     {
         $idAluno = session('id');

         $aluno = Aluno::find($idAluno);

         $listaAluno = Aluno::all();

         //dd($funcionario);

         return view('dashboard.administrador.aluno.index', compact('aluno', 'listaAluno'));
     }

    // CRIAR FUNCIONARIO NOVO
    public function createAluno(Request $request)
    {
        $idAluno = session('id');

        $aluno = Funcionario::find($idAluno);

        if (!$aluno) {
            abort(404, 'Aluno nao encontrado');
        }
        return view('dashboard.administrador.aluno.create', compact('aluno'));
        //  essa estrtura esta dando erro na minha url, por isso ela nao abre
    }

     // CADASTRAR FUNCIONARIO NOVO
     public function cadAluno(Request $request)
     {
         // $request->merge(['dataInscriçãoFuncionario' => now()]);

         $request->validate([
             'nomeAlunoo' => 'required|string|max:100',
             'emailAlunoo' => 'required|string|max:100',
             'dataNascAlunoo' => 'required|date',
             'telefoneAlunoo' => 'required|string|max:20',
             'enderecoAlunoo' => 'required|string|max:100',
             'cidadeAlunoo' => 'required|string|max:100',
             'estadoAlunoo' => 'required|string|max:100',
             'cepAlunoo' => 'required|string|max:10',
             'dataInscricaoAlunoo' => 'required|date',
             'alturaAlunoo' => 'required|string|max:50',
             'pesoAlunoo' => 'required|string|max:100',
             'objetivoAlunoo' => 'required|string|max:100',
             'planoAlunoo' => 'required|string|max:20',
             'statusAlunoo' => 'required|string|max:20',
             'criado_em_Alunoo' => 'required|date',
             'atualizado_em_Alunoo' => 'required|date',
         ]);

         $aluno = new aluno();

         $aluno->nomeAlunoo = $request->input('nomeAlunoo');
         $aluno->emailAlunoo = $request->input('emailAlunoo');
         $aluno->dataNascAlunoo = $request->input('dataNascAlunoo');
         $aluno->telefoneAlunoo = $request->input('telefoneAlunoo');
         $aluno->enderecoAlunoo = $request->input('enderecoAlunoo');
         $aluno->cidadeAlunoo = $request->input('cidadeAlunoo');
         $aluno->estadoAlunoo = $request->input('estadoAlunoo');
         $aluno->cepAlunoo = $request->input('cepAlunoo');
         $aluno->dataInscricaoAlunoo = $request->input('dataInscricaoAlunoo');
         $aluno->alturaAlunoo = $request->input('alturaAlunoo');
         $aluno->pesoAlunoo = $request->input('pesoAlunoo');
         $aluno->objetivoAlunoo = $request->input('objetivoAlunoo');
         $aluno->planoAlunoo = $request->input('planoAlunoo');
         $aluno->statusAlunoo = $request->input('statusAlunoo');
         $aluno->criado_em_Alunoo = $request->input('criado_em_Alunoo');
         $aluno->atualizado_em_Alunoo = $request->input('atualizado_em_Alunoo');

         $aluno->save();

         return redirect()->route('dashboard.administrador.aluno.index')->with('sucess', 'Aluno cadrastado com sucesso');
     }

         // EDITAR/ATUALIZAR FUNCIONARIO
    public function editAluno($id)
    {
        $aluno = Aluno::findOrFail($id);

        return view('dashboard.administrador.aluno.edit', compact('aluno'));
    }

    public function updateAluno(Request $request, $id)
    {
        $request->validate([
            'nomeAlunoo' => 'required',
            'emailAlunoo' => 'required|email',
           'objetivoAlunoo' => 'required',
        ]);

        $aluno = Aluno::findOrFail($id);
        $aluno->nomeAlunoo = $request->input('nomeAlunoo');
        $aluno->emailAlunoo = $request->input('emailAlunoo');
        $aluno->objetivoAlunoo = $request->input('objetivoAlunoo');
        $aluno->save();

        return redirect()->route('dashboard.administrador.aluno.index')->with('success', 'Aluno atualizado com sucesso.');
    }

     // DESATIVAR FUNCIONARIO
     public function desativarAluno($id)
     {
         $aluno = Aluno::findOrFail($id);
         $aluno->statusAlunoo = 'inativo'; // Define o status como 'inativo' para desativar o funcionário
         $aluno->save();

         return redirect()->route('dashboard.administrador.aluno.index')->with('success', 'Aluno desativado com sucesso.');
     }

}

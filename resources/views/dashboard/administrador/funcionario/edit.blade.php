@extends('layout-dash.layout-dash')

@section('title', 'Contato')

@section('conteudo-dash')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
    }
    form {
        background-color: #fff;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        width: 93%;
        margin: auto;
    }
    form div {
        margin-bottom: 15px;
    }
    label {
        display: block;
        font-weight: bold;
    }
    input[type="text"],
    input[type="email"] {
        width: calc(100% - 20px);
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    .invalid-feedback {
        color: #ff0000;
    }
    button[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
    }
    button[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <h1>Editar Funcionário</h1>

    <form action="{{ route('dashboard.administrador.funcionario.update', $funcionario->idFuncionario) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nomeFuncionario">Nome:</label>
            <input type="text" id="nomeFuncionario" name="nomeFuncionario" value="{{ old('nomeFuncionario', $funcionario->nomeFuncionario) }}" required>
            @error('nomeFuncionario')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="emailFuncionario">Email:</label>
            <input type="email" id="emailFuncionario" name="emailFuncionario" value="{{ old('emailFuncionario', $funcionario->emailFuncionario) }}">
        </div>
        <div>
            <label for="cargoFuncionario">Cargo:</label>
            <input type="text" id="cargoFuncionario" name="cargoFuncionario" value="{{ old('cargoFuncionario', $funcionario->cargoFuncionario) }}">
        </div>
        <div>
            <label for="statusFuncionario">Status do Funcionário:</label>
            <select id="statusFuncionario" name="statusFuncionario">
                <option value="ativo" @if($funcionario->statusFuncionario == 'ativo') selected @endif>Ativo</option>
                <option value="inativo" @if($funcionario->statusFuncionario == 'inativo') selected @endif>Inativo</option>
            </select>
        </div>

        <button type="submit">Atualizar</button>
    </form>
</body>

@endsection

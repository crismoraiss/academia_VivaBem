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
    <h1>Editar Aluno</h1>

    <form action="{{ route('dashboard.administrador.aluno.update', $aluno->idAlunoo) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nomeAlunoo">Nome:</label>
            <input type="text" id="nomeAlunoo" name="nomeAlunoo" value="{{ old('nomeAlunoo', $aluno->nomeAlunoo) }}" required>
            @error('nomeAlunoo')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="emailAlunoo">Email:</label>
            <input type="email" id="emailAlunoo" name="emailAlunoo" value="{{ old('emailAlunoo', $aluno->emailAlunoo) }}" required>
            @error('emailAlunoo')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="objetivoAlunoo">Objetivo do Aluno:</label>
            <input type="text" id="objetivoAlunoo" name="objetivoAlunoo" value="{{ old('objetivoAlunoo', $aluno->objetivoAlunoo) }}" required>
            @error('objetivoAlunoo')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Atualizar</button>
    </form>

</body>

@endsection

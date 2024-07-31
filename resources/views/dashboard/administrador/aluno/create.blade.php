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
    <h1>Cadastro de Aluno</h1>

    <form action="{{ route('dashboard.administrador.aluno.cad') }}" method="POST">
        @csrf

        <label for="nomeAlunoo">Nome:</label>
        <input type="text" id="nomeAlunoo" name="nomeAlunoo" required maxlength="100"><br>
        @error ('nomeAlunoo')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="emailAlunoo">Email:</label>
        <input type="email" id="emailAlunoo" name="emailAlunoo" required maxlength="100"><br>
        @error ('emailAlunoo')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="dataNascAlunoo">Data de Nascimento:</label>
        <input type="date" id="dataNascAlunoo" name="dataNascAlunoo" required><br>
        @error ('dataNascAlunoo')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="telefoneAlunoo">Telefone:</label>
        <input type="tel" id="telefoneAlunoo" name="telefoneAlunoo" required maxlength="20"><br>
        @error ('telefoneAlunoo')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="enderecoAlunoo">Endereço:</label>
        <input type="text" id="enderecoAlunoo" name="enderecoAlunoo" required maxlength="100"><br>
        @error ('enderecoAlunoo')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="cidadeAlunoo">Cidade:</label>
        <input type="text" id="cidadeAlunoo" name="cidadeAlunoo" required maxlength="100"><br>
        @error ('cidadeAlunoo')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="estadoAlunoo">Estado:</label>
        <input type="text" id="estadoAlunoo" name="estadoAlunoo" required maxlength="100"><br>
        @error ('estadoAlunoo')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="cepAlunoo">CEP:</label>
        <input type="text" id="cepAlunoo" name="cepAlunoo" required maxlength="10"><br>
        @error ('cepAlunoo')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="dataInscricaoAlunoo">Data de Inscrição:</label>
        <input type="date" id="dataInscricaoAlunoo" name="dataInscricaoAlunoo" required><br>
        @error ('dataInscricaoAlunoo')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="alturaAlunoo">Altura:</label>
        <input type="text" id="alturaAlunoo" name="alturaAlunoo" required maxlength="50"><br>
        @error ('alturaAlunoo')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="pesoAlunoo">Peso:</label>
        <input type="text" id="pesoAlunoo" name="pesoAlunoo" required maxlength="100"><br>
        @error ('pesoAlunoo')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="objetivoAlunoo">Objetivo:</label>
        <input type="text" id="objetivoAlunoo" name="objetivoAlunoo" required maxlength="100"><br>
        @error ('objetivoAlunoo')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="planoAlunoo">Plano:</label>
        <input type="text" id="planoAlunoo" name="planoAlunoo" required maxlength="20"><br>
        @error ('planoAlunoo')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="statusAlunoo">Status:</label>
        <input type="text" id="statusAlunoo" name="statusAlunoo" required maxlength="20"><br>
        @error ('statusAlunoo')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="criado_em_Alunoo">Criado Em:</label>
        <input type="datetime-local" id="criado_em_Alunoo" name="criado_em_Alunoo" required><br>
        @error ('criado_em_Alunoo')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="atualizado_em_Alunoo">Atualizado Em:</label>
        <input type="datetime-local" id="atualizado_em_Alunoo" name="atualizado_em_Alunoo" required><br>
        @error ('atualizado_em_Alunoo')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <button type="submit">Cadastrar</button>
    </form>



</body>     


@endsection

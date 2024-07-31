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
    <h1>Cadastro de Funcionário</h1>

    <form action="{{ route('dashboard.administrador.funcionario.cad') }}" method="POST">
        @csrf

        <label for="nomeFuncionario">Nome:</label>
        <input type="text" id="nomeFuncionario" name="nomeFuncionario" required maxlength="100"><br>
        @error ('nomeFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="emailFuncionario">Email:</label>
        <input type="email" id="emailFuncionario" name="emailFuncionario" required maxlength="100"><br>
        @error ('emailFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="dataNascFuncionario">Data de Nascimento:</label>
        <input type="date" id="dataNascFuncionario" name="dataNascFuncionario" required><br>
        @error ('dataNascFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="telefoneFuncionario">Telefone:</label>
        <input type="tel" id="telefoneFuncionario" name="telefoneFuncionario" required maxlength="20"><br>
        @error ('telefoneFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="enderecoFuncionario">Endereço:</label>
        <input type="text" id="enderecoFuncionario" name="enderecoFuncionario" required maxlength="100"><br>
        @error ('enderecoFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="cidadeFuncionario">Cidade:</label>
        <input type="text" id="cidadeFuncionario" name="cidadeFuncionario" required maxlength="100"><br>
        @error ('cidadeFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="estadoFuncionario">Estado:</label>
        <input type="text" id="estadoFuncionario" name="estadoFuncionario" required maxlength="100"><br>
        @error ('estadoFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="cepFuncionario">CEP:</label>
        <input type="text" id="cepFuncionario" name="cepFuncionario" required maxlength="10"><br>
        @error ('cepFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="dataContratoFuncionario">Data de Contrato:</label>
        <input type="date" id="dataContratoFuncionario" name="dataContratoFuncionario" required><br>
        @error ('dataContratoFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="cargoFuncionario">Cargo:</label>
        <input type="text" id="cargoFuncionario" name="cargoFuncionario" required maxlength="50"><br>
        @error ('cargoFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="salarioFuncionario">Salário:</label>
        <input type="text" id="salarioFuncionario" name="salarioFuncionario" required maxlength="100"><br>
        @error ('salarioFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="tipoFuncionario">Tipo de Funcionário:</label>
        <input type="text" id="tipoFuncionario" name="tipoFuncionario" required maxlength="100"><br>
        @error ('tipoFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="statusFuncionario">Status:</label>
        <input type="text" id="statusFuncionario" name="statusFuncionario" required maxlength="20"><br>
        @error ('statusFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="criadoEm">Criado Em:</label>
        <input type="datetime-local" id="criadoEm" name="criadoEm" required><br>
        @error ('criadoEm')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <label for="atualizadoEm">Atualizado Em:</label>
        <input type="datetime-local" id="atualizadoEm" name="atualizadoEm" required><br>
        @error ('atualizadoEm')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        <button type="submit">Cadastrar</button>
    </form>

</body>

@endsection

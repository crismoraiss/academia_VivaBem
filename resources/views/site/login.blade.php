<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #000000, #282828,#48c9b0);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: rgba(255, 255, 255, 0.075); /* Cor branca com 80% de opacidade */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px; /* Ajusta o tamanho conforme necessário */
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #ffffff; /* Cor branca */
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #232723;
            color: #ffffff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #48c9b0;
        }
    </style>
</head>
<body>

    <form action="{{ route('login') }}" method="post">
        @csrf
        <label for="usuario">Usuario:</label>
        <input type="email" name="email" placeholder="Informe seu usuario" value="{{ old('email') }}">
        {{ $errors->has('email') ? $errors->first('email') : ''}}

        <label for="contrasena">Senha:</label>
        <input type="password"  name="password" placeholder="Informe sua senha" value="{{ old('password') }}">
        {{ $errors->has('password') ? $errors->first('password') : ''}}

        <button type="submit">Login</button>
    </form>

</body>
</html>

{{-- Formulario do login,  e colocamos o type, name e o value de acordo com o campo, e criamos a parte do errors para verificar se ha algum erro no campo --}}

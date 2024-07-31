@extends('layout-dash.layout-dash')

@section('title', 'Contato')

@section('conteudo-dash')

    <div class="col-md-12 grid-item col-sm-12 col-lg-12">
        <div class="widget prd-wdgt pad50-40">
            <div class="table-wrap">


                <table class="table table-striped">
                    <thead>

                        <tr>
                            {{-- <th>ID</th> --}}
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Cargo</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach ($listaFunc as $funcionario) 
                        <tr>
                            <td>{{ $funcionario->nomeFuncionario }}</td>
                            <td>{{ $funcionario->emailFuncionario }}</td>
                            <td>{{ $funcionario->cargoFuncionario }}</td>
                            <td>{{ $funcionario->statusFuncionario }}</td>
                            <td><a href="{{ route('dashboard.administrador.funcionario.edit', $funcionario->idFuncionario) }}" class="btn btn-primary">Editar</a></td>

                            <td>
                                <form action="{{ route('dashboard.administrador.funcionario.desativar', $funcionario->idFuncionario) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" onclick="return confirm('Tem certeza que deseja desativar este funcionário?')">Desativar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>


            </div>
        </div>
    </div>


@endsection

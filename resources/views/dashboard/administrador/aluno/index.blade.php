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
                            <th>Objetivo</th>
                        </tr>  
                    </thead>
                    <tbody>
                         @foreach ($listaAluno as $aluno)
                        <tr>
                            <td>{{ $aluno->nomeAlunoo }}</td>
                            <td>{{ $aluno->emailAlunoo }}</td>
                            <td>{{ $aluno->objetivoAlunoo }}</td>
                            <td>{{ $aluno->statusAlunoo }}</td>
                            <td><a href="{{ route('dashboard.administrador.aluno.edit', $aluno->idAlunoo) }}" class="btn btn-primary">Editar</a></td>

                            <td>
                                <form action="{{ route('dashboard.administrador.aluno.desativar', $aluno->idAlunoo) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" onclick="return confirm('Tem certeza que deseja desativar este aluno?')">Desativar</button>
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

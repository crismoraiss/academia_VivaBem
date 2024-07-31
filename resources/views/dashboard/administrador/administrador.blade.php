{{-- @extends('layout.layout')

@section('title', 'Dashboard')

@section('conteudo') --}}
{{--
<h1>aluno</h1>
<a href="{{ route('sair') }}" class="btn btn-danger">Sair</a> --}}
{{--
@endsection --}}


@extends('layout-dash.layout-dash')

@section('title', 'Contato')

@section('conteudo-dash')

<div class="col-md-12 grid-item col-sm-12 col-lg-12">
    <div class="widget prd-wdgt pad50-40">
        <div class="wdgt-opt">
            <span class="wdgt-opt-btn">
                <i class="ion-android-more-vertical"></i>
            </span>
            <div class="wdgt-opt-lst brd-rd5">
                <a class="delt-wdgt" href="#" title=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Excluir</font></font></a>
                <a class="expnd-wdgt" href="#" title=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Expandir</font></font></a>
                <a class="refrsh-wdgt" href="#" title=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atualizar</font></font></a>
            </div>
        </div>
        <div class="wdgt-ldr">
            <div class="ball-scale-multiple">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="table-wrap">


            <table class="table style2 style3">
                <thead class="table-inverse">

                    <tr>
                        <th>
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">#</font></font></span>
                        </th>
                        <th>
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Imagem</font></font></span>
                        </th>
                        <th>
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nome do Produto</font></font></span>
                        </th>
                        <th>
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Código do produto</font></font></span>
                        </th>
                        <th>
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprado em</font></font></span>
                        </th>
                        <th>
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Status</font></font></span>
                        </th>
                        <th>
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Preço</font></font></span>
                        </th>
                        <th>
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quantidade</font></font></span>
                        </th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>
                            <span class="blue-bg indx"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01</font></font></span>
                        </td>
                        <td>
                            <img class="brd-rd5" src="images/resource/prd-img1.jpg" alt="">
                        </td>
                        <td>
                            <h4>
                                <a href="#" title=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jaqueta preta</font></font></a>
                            </h4>
                        </td>
                        <td>
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4ABSD58</font></font></span>
                        </td>
                        <td>
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10 de junho de 2017</font></font></span>
                        </td>
                        <td>
                            <span class="badge badge-success brd-rd5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pendente</font></font></span>
                        </td>
                        <td>
                            <span class="prc"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">US$ 99,98</font></font></span>
                        </td>
                        <td>
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01</font></font></span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span class="blue-bg indx"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">02</font></font></span>
                        </td>
                        <td>
                            <img class="brd-rd5" src="images/resource/prd-img2.jpg" alt="">
                        </td>
                        <td>
                            <h4>
                                <a href="#" title=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Câmera Canhão LA</font></font></a>
                            </h4>
                        </td>
                        <td>
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4OCSD51</font></font></span>
                        </td>
                        <td>
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15 de junho de 2017</font></font></span>
                        </td>
                        <td>
                            <span class="badge badge-info brd-rd5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Processo</font></font></span>
                        </td>
                        <td>
                            <span class="prc"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">US$ 458,98</font></font></span>
                        </td>
                        <td>
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">03</font></font></span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span class="blue-bg indx"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">03</font></font></span>
                        </td>
                        <td>
                            <img class="brd-rd5" src="images/resource/prd-img3.jpg" alt="">
                        </td>
                        <td>
                            <h4>
                                <a href="#" title=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fones de ouvido LR</font></font></a>
                            </h4>
                        </td>
                        <td>
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4ABSD60</font></font></span>
                        </td>
                        <td>
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19 de junho de 2017</font></font></span>
                        </td>
                        <td>
                            <span class="badge badge-warning brd-rd5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fracassado</font></font></span>
                        </td>
                        <td>
                            <span class="prc"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">US$ 99,98</font></font></span>
                        </td>
                        <td>
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01</font></font></span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span class="blue-bg indx"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">04</font></font></span>
                        </td>
                        <td>
                            <img class="brd-rd5" src="images/resource/prd-img4.jpg" alt="">
                        </td>
                        <td>
                            <h4>
                                <a href="#" title=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Assistir RA Dublado</font></font></a>
                            </h4>
                        </td>
                        <td>
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4OCSD68</font></font></span>
                        </td>
                        <td>
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20 de junho de 2017</font></font></span>
                        </td>
                        <td>
                            <span class="badge badge-info brd-rd5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Processo</font></font></span>
                        </td>
                        <td>
                            <span class="prc"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">US$ 199,98</font></font></span>
                        </td>
                        <td>
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">03</font></font></span>
                        </td>
                    </tr>
                    
                </tbody>
            </table>


        </div>
    </div>
</div>

@endsection




{{-- ***************************************************** --}}


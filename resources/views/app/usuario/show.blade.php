@extends('app.layouts.basico')

@section('titulo','Usuario')

@section('conteudo')
    
    <div class="conteudo-pagina">
    
        <div class="titulo-pagina-2">
            <p>Visualisar - Usuario</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('usuario.index') }}">Voltar</a></li>
                <!--<li><a href="">Consulta</a></li>-->
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto; margin-top:50px">
                <table class="table table-striped" style="text-align: left">
                    <tr>
                        <td>ID:</td>
                        <td>{{$usuario->id}}</td>
                    </tr>
                    <tr>
                        <td>Nome:</td>
                        <td>{{$usuario->nome}}</td>
                    </tr>
                    <tr>
                        <td>Idade:</td>
                        <td>{{$usuario->idade}}</td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td>{{$usuario->email}}</td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>{{$usuario->password}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection
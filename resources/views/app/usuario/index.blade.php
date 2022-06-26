@extends('app.layouts.basico')

@section('titulo','Usuario')

@section('conteudo')

<div class="conteudo-pagina">

    <div class="titulo-pagina-2">
        <p>Listagem de Usuario</p>
    </div>

    <div class="menu">
        <ul>
            <li><a href={{ route('usuario.create') }}><strong>Novo</strong></a></li>
            <!--<li><a href="">Consulta</a></li>-->
        </ul>
    </div>

    <div class="informacao-pagina">
        <div style="width: 90%; margin-left: auto; margin-right: auto;">
            <table class="table table table-striped">
                <thead width="100%">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Idade</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Senha</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <td scope="row">{{ $usuario->nome }}</td>
                        <td>{{ $usuario->idade }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->password }}</td>
                        <td><a href=" {{ route('usuario.show', ['usuario' => $usuario->id]) }} ">Visualizar</a></td>
                        <td>
                            <form id="form_{{$usuario->id}}" method="post"
                                action=" {{ route('usuario.destroy', ['usuario' => $usuario->id] )}}">
                                @method('DELETE')
                                @csrf
                                <!--<button type="submit">Excluir</button>-->
                                <a href="#"
                                    onclick="document.getElementById('form_{{$usuario->id}}').submit()">Excluir</a>
                            </form>
                        </td>
                        <td><a href=" {{ route('usuario.edit', ['usuario' => $usuario->id]) }}">Editar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $usuarios->appends($request)->links() }}
            <!--
                <br>
                {{ $usuarios->count() }} - Total de registros por pagina
                <br>
                {{ $usuarios->total() }} - Total de registros por Consulta
                <br>
                {{ $usuarios->firstItem() }} - O numero do primeiro registro da pagina
                <br>
                {{ $usuarios->lastItem() }} - O numero do ultimo registro da pagina
                -->

            <br>
            Exibindo {{ $usuarios->count() }} fornecedores de {{ $usuarios->total() }} (de {{ $usuarios->firstItem() }}
            a {{ $usuarios->lastItem() }})
            <hr>
        </div>
    </div>
</div>

@endsection
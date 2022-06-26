@extends('site.layouts.basico')

@section('titulo', 'Usuario')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div class="informacao-pagina ">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form action={{ route('site.login') }} method="post">
                    @csrf
                    <input name="usuario" value="{{$request->email ?? old('usuario') }}" type="text" placeholder="Usuário" class="borda-preta">
                    {{ $errors->has('usuario') ? $errors->first('usuario') : ''}}
                    <input name="senha" value="{{$request->password ?? old('senha') }}"  type="password" placeholder="Senha" class="borda-preta">
                    {{ $errors->has('senha') ? $errors->first('senha') : ''}}
                    <button type="submit" class="borda-preta">Acessar</button>
                </form>
                {{isset($erro) && $erro != '' ? $erro : ''}}
            </div>
            <a href=" {{route('site.cadastro')}} " style="text-decoration:none">Registre-se aqui!</a>
        </div>
    </div>


    <div class="rodape">
        <div class="area-contato">
            <h2>Contato</h2>
            <span><strong>(12) 3935006663</strong></span>
 
            <span>| <strong>nathaemanuel.eng@gmail.com</strong></span>
        </div>
    </div>
@endsection

@extends('site.layouts.basico')

@section('titulo', 'Usuario')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Registrar</h1>
        </div>

        <div class="informacao-pagina ">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form action={{ route('site.cadastro') }} method="post">
                    @csrf
                    <input name="name" value="{{ old('name') }}" type="text" placeholder="Usuário" class="borda-preta">
                    {{ $errors->has('name') ? $errors->first('name') : ''}}
                    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="borda-preta">
                    {{ $errors->has('email') ? $errors->first('email') : ''}}
                    <input name="password" value="{{ old('password') }}"  type="password" placeholder="Senha" class="borda-preta">
                    {{ $errors->has('password') ? $errors->first('password') : ''}}
                    
                    <button type="submit" class="borda-preta">Acessar</button>
                    <a href=" {{route('site.login')}} " style="text-decoration:none">Login aqui...</a>
                </form>
                {{isset($erro) && $erro != '' ? $erro : ''}}
            </div>
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

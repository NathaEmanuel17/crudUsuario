<div class="div_form">
    @if(isset($usuario->id))
        <form method="post" action="{{ route('usuario.update', ['usuario' => $usuario->id]) }}">
            @csrf
            @method('PUT')
    @else
        <form method="post" action="{{ route('usuario.store') }}">
            @csrf
    @endif
            <input type="text" name="nome"  value="{{ $usuario->nome ?? old('nome') }}" placeholder="Nome"
                class="borda-preta">
            {{$errors->has('nome') ? $errors->first() : ''}}

            <input type="text" name="idade" value="{{ $usuario->idade ?? old('idade') }}"
                placeholder="Idade" class="borda-preta">
            {{$errors->has('idade') ? $errors->first() : ''}}

            <input type="text" name="email" value="{{ $usuario->email ?? old('email') }}" placeholder="E-mail"
                class="borda-preta">
            {{$errors->has('email') ? $errors->first() : ''}}

            <input type="text" name="password" value="{{ $usuario->password ?? old('password') }}" placeholder="Senha"
                class="borda-preta">
            {{$errors->has('password') ? $errors->first() : ''}}

        
        <button type="submit" class="borda-preta">Cadastrar</button>
    <form>
</div>
<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function index(){
        return view('site.cadastro');
    }

    public function cadastro(Request $request){

        $regras = [
            'name' => 'required|min:3|max:40',
            'email' => 'required|email|unique:users', 
            'password' => 'required|min:6|max:40'
        ];

        $feedback = [
            'name.required' => 'O campo usuario deve ser preenchido',
            'name.min' => 'O campo nome deve ter no mínimo 3 caracteres',
            'name.max' => 'O campo nome deve ter no máximo 40 caracteres',
            'email.required' => 'O campo (e-mail) deve ser preenchido',
            'email.email' => 'O (e-mail) informado não é válido',
            'email.unique' => 'O (e-mail) informado já foi utilizado',
            'password.required' => 'O campo senha é obrigatorio',
            'password.min' => 'O campo senha deve ter no mínimo 6 caracteres',
            'password.max' => 'O campo senha deve ter no máximo 40 caracteres',
        ];

        $request->validate($regras, $feedback);

        User::create($request->all());

        return view('site.login', ['request' => $request]);
    }

}

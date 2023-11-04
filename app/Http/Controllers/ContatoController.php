<?php

namespace App\Http\Controllers;
use App\Models\SiteContato;
use App\Models\MotivoContato;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request) {

        // Validação dos dados do formulario recebidos no request
        $regras = [
            'required' => 'O campo :attribute deve ser preenchido',

            'nome.min' => 'O campo nome precisa ter no minimo 3 caracteres',
            'nome.max' => 'O campo nome precisa ter no maximo 40 caracteres',
            'nome.unique' => 'Já existe esse nome no cadastro',

            'email.email' => 'O campo email é inválido',

            'motivo_contatos_id.required' => 'O campo motivo do contato deve ser selecionado',

            'mensagem.max' => 'O campo nome precisa ter no maximo 2000 caracteres',
            
        ];

        $feedback = [
            'nome' => 'required | min:3 | max:40 | unique:site_contatos',
            'telefone'=> 'required',
            'email'=> 'email',
            'motivo_contatos_id'=> 'required',
            'mensagem'=> 'required | max:2000'
        ];
        
        $request->validate($regras, $feedback);

        SiteContato::create($request->all());
        // return redirect()->route('site.index');
        return redirect()->route('site.contatoFeito');
    }
}

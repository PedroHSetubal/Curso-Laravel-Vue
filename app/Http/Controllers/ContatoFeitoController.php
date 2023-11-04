<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoFeitoController extends Controller
{
    public function contatoFeito(Request $request) {

        return view('site.contatoFeito');
    }
}

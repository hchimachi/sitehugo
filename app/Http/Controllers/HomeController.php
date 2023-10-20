<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function restrito()
    {
        $dados=[
            'pagina' => "inicio",

        ];
        return view('admin.principal', $dados);
    }
    public function usuario()
    {
        $dados=[
            'pagina' => "usuario",

        ];
        return view('admin.principal', $dados);
    }
    public function artigo()
    {
        $dados=[
            'pagina' => "artigo",

        ];
        return view('admin.principal', $dados);
    }
    public function cardapio()
    {
        return view('cardapio.menu');
    }
}

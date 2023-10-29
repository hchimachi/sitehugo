<?php

namespace App\Http\Controllers;

use App\Models\ingrediente;
use App\Models\tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function modelo()
    {
        $dados=[
            'pagina' => "modelo",

        ];
        return view('admin.principal', $dados);
    }
    public function cardapio()
    {
        $tipos=DB::select('SELECT * FROM tipos ORDER BY tipos.tipo ASC');
        $ingrediente= DB::select('SELECT  ingredientes.id, ingredientes.nome FROM `ingredientes` ORDER BY ingredientes.nome ASC');

        $lista_produtos=DB::select('SELECT pratos.cardapio_id, pratos.tipo_id, pratos.ingredientes, pratos.foto, pratos.nome as nomeprato, tipos.tipo, valorvendas.valor FROM `pratos`, tipos, valorvendas WHERE pratos.cardapio_id= tipos.cardapio_id AND pratos.tipo_id=tipos.id AND valorvendas.cardapio_id=pratos.cardapio_id AND valorvendas.prato_id=pratos.id order by pratos.nome');
        //print_r($lista_produtos);


        //  $ing=null;
        //  foreach($ingrediente as $lista)
        //  {
        //      $ing[$lista->id]=$lista->nome;
        //  }
        $dados=[
            'tipo'=>$tipos,
            'lista_pro'=>$lista_produtos,
            'ingrediente'=>$ingrediente

        ];

        return view('cardapio.menu', $dados);

    }
}

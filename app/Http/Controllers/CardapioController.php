<?php

namespace App\Http\Controllers;

use App\Models\cardapio;
use App\Models\ingrediente;
use App\Models\prato;
use App\Models\tipo;
use App\Models\valorvenda;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CardapioController extends Controller
{
    public function cardapio()
    {
        $lista=new cardapio();
        if(session('sucesso')!=null)
        {
            $dados=[
                'sucesso'=>session('sucesso'),
                'lista_cardapio'=>$lista->all(),
                'pagina' => "cardapio",
            ];
        }else{
            $dados=[
                'lista_cardapio'=>$lista->all(),
                'pagina' => "cardapio",
            ];
        }


        return view('admin.principal', $dados);
    }
    public function cad(Request $request)
    {
        $request->validate([
            'nome'=>'required',

            ]);

        $tslug = Str::slug($request['nome'], '-');
        $cardapio=new cardapio();
        $cardapio->nome=trim($request['nome']);
        $cardapio->slug=$tslug;
        $cardapio->save();

        return redirect()->route('cardapio')->with('sucesso', "Novo artigo gravado com sucesso!");

    }
    public function ingredientes($id)
    {
        $listatipo=new tipo();
        $card= new cardapio();
        $listaprato= new prato();
        if(session('sucesso')!=null)

            {
                $dados=[
                'sucesso'=>session('sucesso'),
                'pagina' => "ingredientes",
                'lista'=>ingrediente::all(),
                'lista_tipo'=>$listatipo->all(),
                'cardapio'=>$card=$card->find($id),
                'pratos'=>$listaprato->all()
        ];
            }else{
                $dados=[
                    'pagina' => "ingredientes",
                    'lista'=>ingrediente::all(),
                    'lista_tipo'=>$listatipo->all(),
                    'cardapio'=>$card=$card->find($id),
                    'pratos'=>$listaprato->all()
                ];
            }



        return view('admin.principal', $dados);

    }
    public function cad_ingrediente(Request $request)
    {
        $request->validate([
            'card_id'=>'required',
            'nome'=>'required',
            'quantidade'=>'required'
            ]);

        $cad=new ingrediente();
        $cad->cardapio_id=trim($request['card_id']);
        $cad->nome=trim($request['nome']);
        $cad->quantidade=trim($request['quantidade']);
        $cad->save();

        return redirect()->back()->with('sucesso', "Novo ingrediente gravado com sucesso!");;

    }
    public function cad_prato(Request $request)
    {

        $request->validate([
            'card_id'=>'required',
            'ingredientes'=>'required',
            'tipo'=>'required',
            'nome'=>'required',
            'foto'=>'required'
        ]);
        $tslug = Str::slug($request['nome'], '-');
        $ingredientes=implode(',', $request['ingredientes']);
        $diretorio="cardapios-".$request['card_id'];
        $path=$request->foto->storeAs($diretorio, $tslug.".jpg");
        $prato=new prato();
        $prato->cardapio_id=trim($request['card_id']);
        $prato->ingredientes=$ingredientes;
        $prato->tipo_id=trim($request['tipo']);
        $prato->nome=trim($request['nome']);
        $prato->foto=($path);
        $prato->save();
        return redirect()->back()->with('sucesso', "Novo prato gravado com sucesso!");;
    }
    public function cad_valor(Request $request)
    {
        
        $request->validate([
            'card_id'=>'required',
            'prato'=>'required',
            'valor'=>'required',
        ]);
        $prato=new valorvenda();
        $prato->cardapio_id=trim($request['card_id']);
        $prato->prato_id=trim($request['prato']);
        $prato->valor=trim($request['valor']);
        $prato->save();
        return redirect()->back()->with('sucesso', "Novo valor de prato cadastrado com sucesso!");;

    }
}

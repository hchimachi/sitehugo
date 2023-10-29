<div class="container header">
    <h1 class="titulo">Ingredientes</h1>
<div class="row ">
    <div class="col-4">
        <p>Novo ingrediente</p>
        <form action="{{route('cad_ingrediente')}}" method="post">
            @csrf
            <input type="hidden" name="card_id" value="{{$cardapio->id}}">
            <input type="text" name="nome" class="form-control form-control-border" placeholder="Nome">
            <input type="text" name="quantidade" class="form-control form-control-border" placeholder="quantidade">
            <input type="submit" class="btn btn-primary" value="Gravar">
        </form>
        <form action="{{route('cad_valor')}}" method="post">
            @csrf
            <input type="hidden" name="card_id" value="{{$cardapio->id}}">
            <select name="prato" >
                <option value="">--SELECIONE--</option>
                @foreach ($pratos as $prato)
                @if ($prato->cardapio_id==$cardapio->id)
                    <option value="{{$prato->id}}">{{$prato->nome}}</option>
                @endif
                @endforeach
            </select>
            <input type="text" name="valor" class="form-control form-control-border">
            <input type="submit" value="Gravar-Valor">
        </form>
    </div>
    <div class="col-6 card-body table-responsive p-0 centro">
        @isset($lista)
                    <form action="{{route('cad_prato')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="card_id" value="{{$cardapio->id}}">
                @foreach ($lista as $lista)
                @if ($lista->cardapio_id==$cardapio->id)
                    <div class="custom-control custom-checkbox lista caixa col-2">
                    <label>{{$lista->nome}}<input type="checkbox" name="ingredientes[]" value="{{$lista->id}}"></label>
                    </div>
                @endif

                @endforeach
                <input type="file" name="foto">
                <div class="col-6">
                    <input type="text"name="nome" class="form-control form-control-border" placeholder="Nome do prato">
                </div>
                <div class="col-4">
                    <select name="tipo">
                        <option value="">--Selecione o tipo de prato</option>
                        @foreach ($lista_tipo as $lista)

                        <option value="{{$lista->id}}">{{$lista->tipo}}</option>


                        @endforeach

                    </select>
                </div>

                <input type="submit" class="btn btn-primary" value="Gravar">
            </form>


            @endisset
    </div>

</div>


</div>


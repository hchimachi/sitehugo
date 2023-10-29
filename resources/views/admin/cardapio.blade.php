<div class="container header">
    <h1 class="titulo">Cardapio</h1>
    <div class="rol">
        <div class="col-4">
            <p>Novo Cardapio</p>
            <form action="{{route('cad_cardapio')}}" method="post">
                @csrf
                <input type="text" name="nome" class="form-control form-control-border" placeholder="Nome">
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    <div class="card-body table-responsive p-0 col-6 centro">
        @isset($lista_cardapio)
        <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Cardapio</th>
                <th>Apagar</th>
                <th>Editar</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($lista_cardapio as $lista)
                <tr>
                    <td>{{$lista->id}}</td>
                    <td>{{$lista->nome}}</td>
                    <td>Apagar</td>
                    <td><a href="{{route('ingredientes')}}/{{$lista->id}}">Editar</a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
        @endisset

      </div>
    </div>
</div>


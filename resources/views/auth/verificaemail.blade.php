@extends('auth.base')

@section('content')

<body class="hold-transition login-page">

    <div class="login-box">
      <div class="login-logo">
        <a href="{{route('home')}}"><b>{{env('APP_NAME')}}</b></a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Você precisa confirmar o e-mail para validar o cadastro</p>

          <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div class="row">
              <div class="col-12">
                <input type="submit" name="login" id="login" class="btn btn-primary btn-block" value="Reenviar o e-mail"/>
              </div>
              <!-- /.col -->
            </div>
          </form>

          <p class="mt-3 mb-1">
            <a href="" class="nav-link" data-toggle="modal" data-target="#modal-default">
                Sair
            </a>
            <a href="{{route('login')}}">Login</a>
          </p>
          <p class="mb-0">
            <a href="{{route('register')}}" class="text-center">Register a new membership</a>
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    @include('admin.modal-logout')
@endsection




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
          <p class="login-box-msg">Esqueceu a senha? informe o e-mail cadastrado e enviaremos um link para redefinir a senha.</p>

          <form method="POST" action="{{ route('password.request') }}">
            @csrf
            <div class="input-group mb-3">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">

                <input type="submit" class="btn btn-primary btn-block" value="Enviar">
              </div>
              <!-- /.col -->
            </div>
          </form>

          <p class="mt-3 mb-1">
            <a href="{{route('login')}}">Login</a>
          </p>
          <p class="mb-0">
            <a href="{{route('register')}}" class="text-center">Registrar uma nova conta</a>
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>


@endsection




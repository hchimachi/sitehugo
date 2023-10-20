@extends('auth.base')
@section('titulo', 'Página de login')
@section('content')
<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="{{route('home')}}"><b>{{env('APP_NAME')}}</b></a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Identifique-se para acessar o site</p>

            <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group mb-3">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password" id="password" class="form-control" placeholder="***********">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember" name= "remember">
                  <label for="remember">
                    manter conectado
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Entrar">
              </div>
              <!-- /.col -->
            </div>
          </form>
          <div class="social-auth-links text-center mb-3">
            <p>- Ou -</p>
            <a href="#" class="btn btn-block btn-primary">
              <i class="fab fa-facebook mr-2"></i> Entrar usando Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
              <i class="fab fa-google-plus mr-2"></i> Entrar usando Google+
            </a>
          </div>
          <!-- /.social-auth-links -->

          <p class="mb-1">
            <a href="{{route('password.request')}}">Esqueci minha senha</a>
          </p>
          <p class="mb-0">
            <a href="{{route('register')}}" class="text-center">Cadastrar nova conta</a>
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->











@endsection





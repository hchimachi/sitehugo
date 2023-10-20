<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('storage/fontawesome-free/css/all.min.css')}}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset('storage/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('storage/toastr/toastr.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('storage/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('storage/css/adminlte.min.css')}}">
    <link rel="shortcut icon" href="{{env('APP_LOGO')}}" type="image/x-icon">
</head>

@yield('content')

<!-- jQuery -->
<script src="{{asset('storage/jquery/jquery.min.js')}}"></script>
  <!-- SweetAlert2 -->
  <script src="{{asset('storage/sweetalert2/sweetalert2.min.js')}}"></script>
  <!-- Toastr -->
  <script src="{{asset('storage/toastr/toastr.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('storage/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('storage/js/adminlte.min.js')}}"></script>
    @include('partes.alertas')
    </body>
</html>


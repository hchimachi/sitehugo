@extends('admin.base')
@section('titulo', "Área restrita")
@section('content')

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

@include('admin.preload')
@include('admin.navbar')
@include('admin.lateral')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @include("admin.$pagina")


  </div>



  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy;  <a href="https://adminlte.io">{{env('APP_NAME')}}</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>




@endsection


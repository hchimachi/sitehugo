<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="{{asset('feane/images/favicon.png')}}" type="">

  <title> TO COM FOME SEU MOÇO </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('feane/css/bootstrap.css')}}" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="{{asset('feane/css/font-awesome.min.css" rel="stylesheet')}}" />

  <!-- Custom styles for this template -->
  <link href="{{asset('feane/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('feane/css/responsive.css')}}" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="{{asset('feane/images/hero-bg.jpg')}}" alt="aa">
    </div>

  </div>

  <!-- food section -->

<section class="food_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Nosso Cardápio
            </h2>
        </div>
        @isset($tipo)
            <ul class="filters_menu">
                <li class="active" data-filter="*">Tudo</li>
                @foreach ($tipo as $tipo)
                <li data-filter=".{{$tipo->tipo}}">{{$tipo->tipo}}</li>
                @endforeach
            </ul>
        @endisset
        <div class="filters-content">
            <div class="row grid">
                @foreach ($lista_pro as $listap)
                <div class="col-sm-6 col-lg-4 all {{$listap->tipo}}">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{url("storage/$listap->foto") }}" alt="{{$listap->nomeprato}}">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    {{$listap->nomeprato}}
                                </h5>
                                @if ($listap->tipo!='bebida')
                                <p>
                                    @php

                                    $lista=explode(',', $listap->ingredientes);
                                    foreach ($ingrediente as $ing) {
                                        if (in_array($ing->id, $lista))
                                    {
                                        echo $ing->nome.' ';
                                    }
                                    }

                                    @endphp
                                    @foreach ($lista as $listaing)

                                    @endforeach

                                    @foreach ($lista as $lista)


                                    @endforeach


                                </p>
                                @endif

                                <div class="options">
                                    <h6 class="preco">
                                        R${{$listap->valor}}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
        <div class="btn-box">
            <a href="">
              ver tudo
            </a>
        </div>
    </div>
</section>

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">


        <div class="col-md-6 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Trailer do Seu Moço
            </a>
            <p>
              Fico feliz em poder lhe atender, estamos localizados na Avenida Dr. Eulalio, praça do Zago - Vila Rezende Piracicaba/SP
            </p>

          </div>
        </div>

        <div class="col-md-6 footer-col">
          <h4>
            Horário de funcionamento
          </h4>
          <p>
            De terça a domingo
          </p>
          <p>
            das 17h as 22h
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="{{asset('feane/js/jquery-3.4.1.min.js')}}"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="{{asset('feane/js/bootstrap.js')}}"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="{{asset('feane/js/custom.js')}}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>

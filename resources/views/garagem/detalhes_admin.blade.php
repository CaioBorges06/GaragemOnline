<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN | ADMIN</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


        <div class="container">
            <div class="row">
                    <div class="header__logo">
                        <a href="{{route('inicio')}}"></img src="/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav" style="text-align:left;">
                        <nav class="header__menu">
                            <ul>
                            <li><a href="{{route('inicio')}}"  style="font-size: 40px;">Início</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__widget">
                            <div class="header__nav__widget__btn">
                        </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb End -->
     
    <div class="breadcrumb-option set-bg" data-setbg="/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Detalhes do Carro</h2>
                        <span style="color: #de4646ff;">Área restrita para administradores</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Begin -->
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-lg-4 col-md-4">
        <div class="car__item">
            <div class="car__item__pic__slider owl-carousel">
            @if ($carro->fotoUm)
                <img src="{{ $carro->fotoUm }}" alt="">
            @endif
            @if ($carro->fotoDois)
                <img src="{{ $carro->fotoDois }}" alt="">
            @endif
            @if ($carro->fotoTres)
                <img src="{{ $carro->fotoTres }}" alt="">
            @endif
        </div>
            <div class="car__item__text">
                <div class="car__item__text__inner">
                    <div class="label-date">{{ $carro->ano }}</div>
                    <h5><span style="color: #f44336;">modelo: </span> {{$carro->modelo}} </h5>
                    <h5><span style="color: #f44336;">marca: </span> {{$carro->marca}} </h5>
                    <h5><span style="color: #f44336;">cor: </span> {{$carro->cor}} </h5>
                    <ul>
                        <li><span>R$ {{ number_format((float)$carro->valor, 2, ',', '.') }}</span></li>
                    </ul>
                    
                    <h5 style="display: block; width: 100%;">
    <span style="color: #f44336;">Descrição:</span>
</h5>

<div style="
    display: block;
    width: 95%;
    background-color: #f9f9f9;
    padding: 12px 15px;
    border-left: 4px solid #db2d2e;
    line-height: 1.6;
    color: #333;
    font-weight: 400;
    text-align: justify;
    margin-top: 8px;
    word-wrap: break-word;
    white-space: pre-line;
    box-sizing: border-box;
">
    {!! nl2br(e($carro->detalhes)) !!}
</div>

    <h5><span style="color: #f44336"> Quilometragem: </span><h6>{{ number_format((float) $carro->km, 0, '', '.') }}<span style="color: #f44336"> km</span></h6></h5>


                </div>
                <div class="car__item__price">
                    <a class="car-option" href="#">Editar</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Contact Section Begin -->


    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="/img/footer-bg.jpg">
        <div class="container">
            <div class="footer__contact">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__title">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">

                </div>

            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/mixitup.min.js"></script>
    <script src="/js/jquery.slicknav.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>
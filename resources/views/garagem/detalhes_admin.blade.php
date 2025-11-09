<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN | Detalhes Carro</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

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
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{route('inicio')}}"><img src="/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav" style="text-align:left;">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="{{route('inicio')}}" style="font-size: 40px;">Início</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__widget">
                            <div class="header__nav__widget__btn">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    @if (session('success'))
<div 
    style="
        position: fixed;
        top: 20px;
        right: 20px;
        background-color: #28a745;
        color: white;
        padding: 15px 25px;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        z-index: 1050;
        opacity: 0;
        transform: translateY(-20px);
        transition: opacity 0.5s, transform 0.5s;
    "
    id="successToast"
>
    {{ session('success') }}
</div>

<script>
    var toastEl = document.getElementById('successToast');
    if (toastEl) {
        // aparecer suavemente
        setTimeout(() => {
            toastEl.style.opacity = 1;
            toastEl.style.transform = "translateY(0)";
        }, 100);

        // desaparecer após 5 segundos
        setTimeout(() => {
            toastEl.style.opacity = 0;
            toastEl.style.transform = "translateY(-20px)";
        }, 5000);
    }
</script>
@endif

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
    </div><br><br><br>

 <div class="container" style="margin-top: 30px; margin-bottom: 30px;">
    <a href="{{route('carros')}}" class="site-btn" style="background-color: transparent; color: #f44336; border: 2px solid #f44336; padding: 10px 25px;">
        <i class="fa fa-arrow-left"></i> Voltar para a lista de carros
    </a>
</div>

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

                        <h4 style="margin-top: 10px; margin-bottom: 20px; color: #333;">
                            {{ $carro->marca }} - {{ $carro->modelo }}
                        </h4>
                        
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-6">
                                <p style="margin-bottom: 8px;">
                                    <strong style="color: #f44336;">Categoria:</strong> {{ $carro->categoria }}
                                </p>
                                <p style="margin-bottom: 8px;">
                                    <strong style="color: #f44336;">Modelo:</strong> {{ $carro->modelo }}
                                </p>
                                <p style="margin-bottom: 8px;">
                                    <strong style="color: #f44336;">Marca:</strong> {{ $carro->marca }}
                                </p>
                            </div>
                            <div class="col-6">
                                <p style="margin-bottom: 8px;">
                                    <strong style="color: #f44336;">Cor:</strong> {{ $carro->cor }}
                                </p>
                                <p style="margin-bottom: 8px;">
                                    <strong style="color: #f44336;">Quilometragem:</strong> <span style="font-weight: 500;">{{ number_format((float) $carro->km, 0, '', '.') }}</span> <span style="color: #f44336">km</span>
                                </p>
                                <p style="margin-bottom: 8px; font-size: 1.1em;">
                                    <strong style="color: #f44336;">Valor:</strong> <span style="font-weight: 700;">R$ {{ number_format((float)$carro->valor, 2, ',', '.') }}</span>
                                </p>
                            </div>
                        </div>

                        <h5 style="display: block; width: 100%; margin-top: 20px; margin-bottom: 8px;">
                            <span style="color: #f44336;">Descrição:</span>
                        </h5>

                        <div style="
                            display: block;
                            width: 100%;
                            background-color: #f9f9f9;
                            padding: 15px;
                            border-left: 4px solid #db2d2e;
                            line-height: 1.6;
                            color: #333;
                            font-weight: 400;
                            text-align: justify;
                            margin-bottom: 25px;
                            word-wrap: break-word;
                            white-space: pre-line;
                            box-sizing: border-box;
                            border-radius: 4px;
                        ">
                            {!! nl2br(e($carro->detalhes)) !!}
                        </div>
                        
                    </div>
                    
                    <div style="text-align:center;margin-top:20px; margin-bottom:20px;margin-left:20px;">
                        <a class="site-btn" href="{{route('carros.editar', $carro->id)}}" style="background-color:blue; margin-right:90px;"> Editar </a> 
                        <a class="site-btn" href="{{route('carros.deletar', $carro->id)}}" > Excluir </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
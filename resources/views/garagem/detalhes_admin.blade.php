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

    <style>
        /* ---------- Melhorias visuais ---------- */
        .car__item {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .car__item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }

        .car__item__text {
            padding: 25px;
        }

        .car__item__text h4 {
            font-weight: 700;
            text-align: center;
        }

        .car__item__pic__slider img {
            border-radius: 6px;
            object-fit: cover;
        }

        .site-btn {
            transition: all 0.3s ease;
            border-radius: 5px;
            padding: 10px 25px;
            font-weight: 600;
        }

        .site-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .breadcrumb__text h2 {
            font-weight: 800;
            letter-spacing: 1px;
        }

        .breadcrumb__text span {
            display: block;
            margin-top: 8px;
            font-weight: 500;
        }

        /* Ajuste do botão voltar */
        .back-btn {
            display: inline-block;
            margin-bottom: 25px;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background-color: #f44336;
            color: #fff !important;
        }

        /* Layout centralizado */
        .car-container {
            max-width: 800px;
            margin: 80px auto;
        }

        /* Descrição */
        .descricao-box {
            background-color: #f9f9f9;
            padding: 20px;
            border-left: 4px solid #db2d2e;
            border-radius: 6px;
            line-height: 1.7;
            text-align: justify;
            word-wrap: break-word;
            white-space: pre-line;
            box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.05);
        }

        /* Título da seção */
        .section-title {
            color: #f44336;
            font-weight: 700;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header -->
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

    <!-- Toast de sucesso -->
    @if (session('success'))
    <div id="successToast" style="
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
        transition: opacity 0.5s, transform 0.5s;">
        {{ session('success') }}
    </div>

    <script>
        const toastEl = document.getElementById('successToast');
        if (toastEl) {
            setTimeout(() => {
                toastEl.style.opacity = 1;
                toastEl.style.transform = "translateY(0)";
            }, 100);
            setTimeout(() => {
                toastEl.style.opacity = 0;
                toastEl.style.transform = "translateY(-20px)";
            }, 5000);
        }
    </script>
    @endif

    <!-- Breadcrumb -->
    <div class="breadcrumb-option set-bg" data-setbg="/img/breadcrumb-bg.jpg">
        <div class="container text-center">
            <div class="breadcrumb__text">
                <h2>Detalhes do Carro</h2>
                <span style="color: #de4646ff;">Área restrita para administradores</span>
            </div>
        </div>
    </div>

    <!-- Voltar -->
    <div class="container car-container">
        <a href="{{ route('carros') }}" 
   class="back-btn"
   style="
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background-color: #fff;
        color: #f44336;
        border: 2px solid #f44336;
        border-radius: 50px;
        padding: 10px 22px;
        font-weight: 600;
        font-size: 16px;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
   "
   onmouseover="this.style.backgroundColor='#f44336'; this.style.color='#fff'; this.style.boxShadow='0 6px 16px rgba(244,67,54,0.4)';"
   onmouseout="this.style.backgroundColor='#fff'; this.style.color='#f44336'; this.style.boxShadow='0 4px 10px rgba(0,0,0,0.1)';">
   <i class="fa fa-arrow-left"></i> Voltar para a lista de carros
</a>


        <!-- Card do Carro -->
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
                <div class="label-date">{{ $carro->ano }}</div>

                <h4>{{ $carro->marca }} - {{ $carro->modelo }}</h4>

                <div class="row mt-4">
                    <div class="col-6">
                        <p><strong style="color: #f44336;">Categoria:</strong> {{ $carro->categoria }}</p>
                        <p><strong style="color: #f44336;">Modelo:</strong> {{ $carro->modelo }}</p>
                        <p><strong style="color: #f44336;">Marca:</strong> {{ $carro->marca }}</p>
                    </div>
                    <div class="col-6">
                        <p><strong style="color: #f44336;">Cor:</strong> {{ $carro->cor }}</p>
                        <p><strong style="color: #f44336;">Quilometragem:</strong> {{ number_format($carro->km, 0, '', '.') }} <span style="color: #f44336;">km</span></p>
                        <p><strong style="color: #f44336;">Valor:</strong> <span style="font-weight: 700;">R$ {{ number_format($carro->valor, 2, ',', '.') }}</span></p>
                    </div>
                </div>

                <h5 class="section-title mt-4">Descrição:</h5>
                <div class="descricao-box">
                    {!! nl2br(e($carro->detalhes)) !!}
                </div>

                <div class="text-center mt-4">
                    <a class="site-btn" href="{{ route('carros.editar', $carro->id) }}" style="background-color:blue; margin-right: 15px;">Editar</a>
                    <a class="site-btn" href="{{ route('carros.deletar', $carro->id) }}">Excluir</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer set-bg" data-setbg="/img/footer-bg.jpg"></footer>

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

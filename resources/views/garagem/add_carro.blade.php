<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN | Adicionar Carro</title>

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

        <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li></i>📍 Venda de carros em todo o estado de São Paulo </li>
                            <li><i class="fa fa-envelope-o"></i> garagemonline_contato@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <div class="header__top__phone">
                                <i class="fa fa-phone"></i>
                                <span>(+14) 991330681</span>
                            </div>
                            <div class="header__top__social">
                                <a href="https://www.instagram.com/caio.borgeess/"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{route('inicio')}}"><img src="/img/logo.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav">
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


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
                        <h2>Adicionar Carro</h2>
                        <span style="color: #de4646ff;">Área restrita para administradores</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Begin -->

<h2 style="
    text-align: center;
    background-color: #db2d2e;
    color: white;
    padding: 20px 0;
    margin: 60px auto;
    width: 60%;
    font-weight: 900;
    letter-spacing: 1px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
">
     <strong>Todos os campos são obrigatórios</strong> 
</h2>

    <!-- Contact Section Begin -->
    <section >
        <div class="container" style="margin-bottom: 80px;">
        
        <div class="contact__form" style="max-width: 900px; margin: 0 auto; padding: 40px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 0 15px rgba(0,0,0,0.05);">
            <form method="POST" action="{{ route('validar.carro') }}">
                @csrf

                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="modelo"><strong>Modelo:</strong></label><br>
                        <select name="modelo" class="form-control" style="width:100%; padding:8px; border-radius:5px; height: 50px;">
                            <option value="">Selecione o modelo</option>
                            @foreach($modelo as $modelo)
                                <option value="{{ $modelo->modelo }}">{{ $modelo->modelo }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="categoria"><strong>Categoria:</strong></label><br>
                        <select name="categoria" class="form-control" style="width:100%; padding:8px; border-radius:5px; height: 50px;">
                            <option value="">Selecione a categoria</option>
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->categoria }}">{{ $categoria->categoria }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="marca"><strong>Marca:</strong></label><br>
                        <select name="marca" class="form-control" style="width:100%; padding:8px; border-radius:5px; height: 50px;">
                            <option value="">Selecione a marca</option>
                            @foreach($marca as $marca)
                                <option value="{{ $marca->marca }}">{{ $marca->marca }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="cor"><strong>Cor:</strong></label><br>
                        <select name="cor" class="form-control" style="width:100%; padding:8px; border-radius:5px; height: 50px;">
                            <option value="">Selecione a cor</option>
                            @foreach($cor as $cor)
                                <option value="{{ $cor->cor }}">{{ $cor->cor }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label for="ano"><strong>Ano:</strong></label>
                        <input type="number" name="ano" placeholder="Ex: 2020" min="1900" max="2100" required>
                    </div>
                    
                    <div class="col-lg-4 mb-3">
                        <label for="km"><strong>Quilometragem (km):</strong></label>
                        <input type="number" name="km" placeholder="Ex: 45000" min="0" required>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label for="valor"><strong>Valor (R$):</strong></label>
                        <input type="number" name="valor" id="valor" placeholder="Ex: 118900.00" min="0" step="0.01" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <label for="detalhes" class="form-label"><strong>Detalhes e Opcionais:</strong></label>
                        <textarea class="form-control" name="detalhes" rows="5" placeholder="Câmbio CVT, 2.0 Flex, bancos em couro, multimídia, etc. (Máx. 255 caracteres)" required></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h5 style="margin-top: 20px; margin-bottom: 15px; color: #db2d2e;">🔗 Links das Fotos</h5>
                    </div>
                    
                    <div class="col-lg-12 mb-3">
                        <label for="fotoUm"><strong>Foto 1:</strong></label>
                        <input type="url" name="fotoUm" id="fotoUm" placeholder="Cole o link DIRETO da imagem 1 (Ex: .jpg, .png)" required>
                    </div>

                    <div class="col-lg-12 mb-3">
                        <label for="fotoDois"><strong>Foto 2:</strong></label>
                        <input type="url" name="fotoDois" placeholder="Cole o link da imagem 2" required>
                    </div>

                    <div class="col-lg-12 mb-4">
                        <label for="fotoTres"><strong>Foto 3:</strong></label>
                        <input type="url" name="fotoTres" placeholder="Cole o link da imagem 3" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="site-btn">ADICIONAR CARRO</button>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{ $error }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </form>
        </div>
    </div>
    </section>
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
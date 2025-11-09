<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADM | Cadastrar Itens</title>

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
                        <h2>Cadastrar Itens</h2>
                        <span style="color: #de4646ff;">Área restrita para administradores</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Begin -->

                                @if ($errors->any())
                                
                                @foreach ($errors->all() as $error)
                                    <br><br>
                                    <div class="alert alert-danger" role="alert">
                                        {{ $error }}
                                    </div>
                                    <br><br>
                                @endforeach
                            @endif

    <!-- Contact Section Begin -->
    <section>
    <div class="container" style="margin-bottom: 80px; margin-top:40px;">
        
        <div class="contact__form">
            <h2 class="text-center mb-4">Cadastro de Categoria</h2>
            <form method="POST" action="{{ route('validar.categoria') }}">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="form-group text-center mb-4">
                            <label for="categoria"><strong>Nome da Categoria:</strong></label>
                            <input type="text" name="categoria" class="form-control" placeholder="Insira o nome da categoria">
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="site-btn">Adicionar Categoria</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <hr class="my-5"> 

    <div class="container" style="margin-bottom: 80px; margin-top:40px;">
        
        <div class="contact__form">
            <h2 class="text-center mb-4">Cadastro de Modelo</h2>
            <form method="POST" action="{{ route('validar.modelo') }}">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="form-group text-center mb-4">
                            <label for="modelo"><strong>Nome do Modelo:</strong></label>
                            <input type="text" name="modelo" class="form-control" placeholder="Insira o nome do modelo">
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="site-btn">Adicionar Modelo</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <hr class="my-5">

    <div class="container" style="margin-bottom: 80px; margin-top:40px;">
        
        <div class="contact__form">
            <h2 class="text-center mb-4">Cadastro de Cor</h2>
            <form method="POST" action="{{ route('validar.cor') }}">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="form-group text-center mb-4">
                            <label for="cor"><strong>Nome da Cor:</strong></label>
                            <input type="text" name="cor" class="form-control" placeholder="Insira o nome da cor">
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="site-btn">Adicionar Cor</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <hr class="my-5">

    <div class="container" style="margin-bottom: 80px; margin-top:40px;">
        
        <div class="contact__form">
            <h2 class="text-center mb-4">Cadastro de Marca</h2>
            <form method="POST" action="{{ route('validar.marca') }}">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="form-group text-center mb-4">
                            <label for="marca"><strong>Nome da Marca:</strong></label>
                            <input type="text" name="marca" class="form-control" placeholder="Insira o nome da marca">
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="site-btn">Adicionar Marca</button>
                    </div>
                </div>
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
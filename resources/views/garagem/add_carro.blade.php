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
    border-radius: 5px;
    font-weight: 900;
    letter-spacing: 1px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
">
     <strong>Todos os campos são obrigatórios</strong> 
</h2>

    <!-- Contact Section Begin -->
    <section >
        <div class="container" style="margin-bottom: 80px;">
                    <div class="contact__form" >
                        <form method="POST" action="{{route('validar.carro')}}" >

                            @csrf

                            <div style="display: flex; flex-direction: column; align-items: center;" >
 
                                <div class="col-lg-6">
                            <label for="categoria"><strong>Categoria:</strong></label><br>
                            <select name="categoria" style="width:100%; padding:8px; border-radius:5px;">
                                <option value="">Selecione a categoria</option>
                                @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                                @endforeach
                            </select>
                            </div><br>

                                <div class="col-lg-6">
                                    <label for="modelo"><strong>Modelo:</strong></label>
                                    <input type="text" name="modelo" placeholder="insira o modelo">
                                </div>

                            <div class="col-lg-6">
                                    <label for="marca"><strong>Marca:</strong></label>
                                    <input type="text" name="marca" placeholder="insira a marca">
                                </div>

                            <div class="col-lg-6">
                                    <label for="cor"><strong>Cor:</strong></label>
                                    <input type="text" name="cor" placeholder="insira a cor">
                                </div>

                            <div class="col-lg-6">
                                    <label for="ano"><strong>Ano:</strong></label>
                                    <input type="number" name="ano" placeholder="insira o ano">
                                </div>
                            
                            <div class="col-lg-6">
                                    <label for="km"><strong>Quilometragem:</strong></label>
                                    <input type="text" name="km" placeholder="insira a quantidade de km">
                                </div>

                            <div class="col-lg-6">
                                    <label for="valor"><strong>Valor (R$):</strong></label>
                                    <input type="number" name="valor" id="valor" placeholder="Ex: 75000.00" min="0" step="0.01">
                                </div>

                            <div class="col-lg-8 mb-3">
                            <label for="detalhes" class="form-label"><strong>Detalhes:</strong></label>
                            <textarea class="form-control" name="detalhes" rows="5" placeholder="Insira os detalhes do carro..."></textarea>
                            </div>

                            <div>
                                <label for="fotoUm"><strong>Link da Foto 1:</strong></label>
                                <input type="text" name="fotoUm" placeholder="Cole o link da imagem 1">
                            </div>

                            <div>
                                <label for="foto2"><strong>Link da Foto 2:</strong></label>
                                <input type="text" name="fotoDois" placeholder="Cole o link da imagem 2">
                            </div>

                            <div>
                                <label for="foto3"><strong>Link da Foto 3:</strong></label>
                                <input type="text" name="fotoTres" placeholder="Cole o link da imagem 3">
                            </div>

                            <div style="text-align: center;" class="col-lg-12">
                                <button type="submit" class="site-btn">Adicionar</button>
                            </div>
                            </div>

                @if ($errors->any())

                    <div style="color: red; text-align:center; margin-top: 15px;">
                        {{ $errors->first() }}
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
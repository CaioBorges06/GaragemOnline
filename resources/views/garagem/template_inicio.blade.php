<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HVAC | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- .carros Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__widget">
            <a href="#" class="search-switch"><i class="fa fa-search"></i></a>
            <a href="#" class="primary-btn">Adicionar carro</a>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.jpg" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <ul class="offcanvas__widget__add">
            <li><i class="fa fa-envelope-o"></i> garagemonline_contato@gmail.com</li>
        </ul>
        <div class="offcanvas__phone__num">
            <i class="fa fa-phone"></i>
            <span>(+14) 991330681</span>
        </div>
        <div class="offcanvas__social">
            <a href="https://www.instagram.com/caio.borgeess/"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

   @yield('com_sessao')
   @yield('sem_sessao')

    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="img/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero__text">
                        <div class="hero__text__title">
                            <span>Encontre o carro dos seus sonhos</span>
                            <h2>Modelos variados</h2>
                        </div>
                        <div class="hero__text__price">
                            <div class="car-model">Desde 2025</div>
                            <h2 style="font-size:30px;">Impulsionando desejos</h2>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Em etapas</span>
                        <h2>Como funciona?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-1.png" alt="">
                        <h5>Contate nossa equipe</h5>
                        <p>Tem interesse em registrar seus veículos conosco? Entre em contato com nossa equipe!
Estamos disponíveis para esclarecer dúvidas, oferecer informações detalhadas sobre o processo de registro e entender as necessidades da sua garagem. Nosso atendimento é direto, profissional e voltado para criar parcerias de confiança.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-2.png" alt="">
                        <h5>Marque uma Reunião</h5>
                        <p>Quer conversar pessoalmente sobre valores, condições e benefícios do registro?
Agende uma reunião conosco! Durante o encontro, apresentaremos nossas soluções, explicaremos o funcionamento do sistema e ajustaremos os detalhes de acordo com o seu negócio.

Estamos prontos para oferecer um atendimento personalizado e construir uma parceria que traga praticidade e segurança à gestão da sua frota.
Entre em contato e marque seu horário hoje mesmo!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-3.jpg" alt="">
                        <h5>Registramos Seu Carro</h5>
                        <p>Facilitamos o processo de registro do seu veículo de forma rápida, segura e sem complicações. Nosso serviço é voltado especialmente para donos de garagens que desejam manter todos os carros devidamente cadastrados, com total transparência e conformidade.

Cuidamos de cada etapa do registro, desde a coleta das informações até a confirmação final no sistema, garantindo que tudo seja feito com eficiência e profissionalismo. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-4.jpg" alt="">
                        <h5>Aumente Seu Lucro</h5>
                        <p>Registrar seus veículos conosco não é apenas uma questão de organização — é uma oportunidade de crescimento.
Com todos os carros devidamente registrados, sua garagem ganha mais credibilidade, agilidade nas negociações e acesso a condições exclusivas que otimizam seus resultados.

Ao manter um controle eficiente e transparente, você reduz custos operacionais, evita atrasos e melhora a gestão da frota, transformando tempo em lucro.

Invista na regularização e veja seu negócio prosperar com mais segurança e rentabilidade.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Chooseus Section Begin -->
    <section class="chooseus spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="chooseus__text">
                        <div class="section-title">
                            <h2>Por que as pessoas escolhem a gente?</h2>
                            <p>Porque oferecemos um serviço confiável, transparente e feito para facilitar a vida de quem trabalha com veículos. Nosso foco é criar parcerias duradouras e trazer praticidade para o dia a dia de donos de garagens que buscam eficiência e lucro.</p>
                        </div>
                        <ul>
                            <li><i class="fa fa-check-circle"></i> Facilidade no registro: processo rápido, simples e sem burocracia.</li>
                            </li>
                            <li><i class="fa fa-check-circle"></i> Parceria transparente: informações claras e acordos justos em todas as etapas.
                            </li>
                            <li><i class="fa fa-check-circle"></i> Mais lucro e eficiência: reduzimos custos e otimizamos a gestão da sua frota.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="chooseus__video set-bg">
            <img src="img/chooseus-video.png" alt="">
            <a href="https://www.youtube.com/watch?v=Xd0Ok-MkqoE"
                class="play-btn video-popup"><i class="fa fa-play"></i></a>
        </div>
    </section>
    <!-- Chooseus Section End -->

    <br>
    <br>
    <br>
    <br>

    <!-- Cta Begin -->
    <div class="cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="cta__item set-bg" data-setbg="img/cta/cta-1.jpg">
                        <h4>Para quem quer comprar um carro</h4>
                        <p>Encontre, compare e compre o carro dos seus sonhos com praticidade e confiança.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="cta__item set-bg" data-setbg="img/cta/cta-2.jpg">
                        <h4>Para quem quer vender um carro</h4>
                        <p>Venda seu carro rápido, fácil e para o comprador certo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="footer__contact">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__title">
                            <h2>Entre em contato!</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__option">
                            <div class="option__item"><i class="fa fa-phone"></i> (+14) 991330681 </div>
                            <div class="option__item email"><i class="fa fa-envelope-o"></i> garagemonline_contato@gmail.com</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3">
                    <div class="footer__widget">
                        
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    
                </div>
                <div class="col-lg-3 col-md-6">
                </div>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <div class="footer__copyright__text">
                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
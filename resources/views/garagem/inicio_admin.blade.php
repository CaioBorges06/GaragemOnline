@extends('garagem.template_inicio')

@section('com_sessao')


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
                        <a href="./index.html"><img src="img/logo.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="{{route('carros')}}">Ver Carros</a></li>
                                <li><a href="{{route('form.categoria')}}">Adicionar categoria</a></li>
                            </ul>
                        </nav>
                    <div class="header__nav__widget">
                        <div class="header__nav__widget__btn" style="padding:5px;">
                            </div>
                                <a href="{{ route('form.carro') }}" class="primary-btn">Adicionar Carro</a>
                            </div>
                            
                        <form method="POST" action="{{ route('admin.logout') }}" style="display:inline;">
                        @csrf
                                <button type="submit" 
                                style="
                                    margin-left: 10px;
                                    background-color: white;
                                    color: #db2d2e;
                                    border: 1px solid #db2d2e;
                                    box-shadow: 4px 4px 10px rgba(0,0,0,0.3);
                                    padding: 10px 20px;
                                    font-family: inherit;
                                    font-size: 16px;
                                    cursor: pointer;
                                    outline: none;
                                "
                                onmouseover="this.style.backgroundColor='#e8dfdfff';" 
                                onmouseout="this.style.backgroundColor='white';">
                                Logout
                            </button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    @endsection
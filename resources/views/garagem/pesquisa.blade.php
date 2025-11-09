@extends('garagem.carros')

@section('pesquisa')

    @if (isset($mensagem))
        <p style="text-align:center; color:#db2d2e;">{{ $mensagem }}</p>
    @endif

    @if ($estado === 'encontrado')

                            <div class="row">
                            @foreach($carros as $carro)
                        <!-- Início -->
                            <div class="col-lg-4 col-md-4">
                                <div class="car__item">
                                    <div class="car__item__pic__slider owl-carousel">
                                        <img src="{{ $carro->fotoUm }}" style="width: 100%; height: 220px; object-fit: fill; border-radius: 0;">
                                        <img src="{{ $carro->fotoDois }}" style="width: 100%; height: 220px; object-fit: fill; border-radius: 0;">
                                        <img src="{{ $carro->fotoTres }}" style="width: 100%; height: 220px; object-fit: fill; border-radius: 0;">
                                    </div>
                                    <div class="car__item__text">
                                        <div class="car__item__text__inner">
                                            <div class="label-date">{{ $carro->ano }}</div>
                                            <h5><a href="#">{{ $carro->modelo }}</a></h5>
                                            <ul>
                                                <li><span>R$ {{ number_format((float)$carro->valor, 2, ',', '.') }}</span></li>
                                            </ul>
                                        </div>
                                        <div class="car__item__price">
                                            <a class="car-option" href="{{ route('carros.detalhes', $carro->id) }}" >Detalhes</a>
                                        </div>
                                    </div>
                                </div><br><br><br><br>
                            </div>
                        <!-- Fim -->
                        @endforeach
                        </div>
    @endif

@endsection
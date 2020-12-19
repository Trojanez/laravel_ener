@extends('app')

@section('content')
    <div class="all-products">
        <h2 class="title text-center">Все товары</h2>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ asset('images/products/alcohol/nemiroff-light.jpg') }}"
                         alt="alcohol" width="300" height="300">
                    <div class="caption text-center">
                        <h3>Водка Nemiroff 1л.</h3>
                        <p class="price">40 грн.</p>
                        <p class="info">
                            <a class="in-basket" href="#">В корзину</a>
                            <a class="details" href="#">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

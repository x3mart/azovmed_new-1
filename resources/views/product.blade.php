@extends('layouts.main')

@section('title')
    {{ $product->name }} оптом от производителя — купить по низкой цене с доставкой по России
@endsection
@section('meta_description')
    {{ $product->title }} купить оптом от российского прозводителя. Приятные цены. Доставим по России и странам СНГ. Звоните {{ config('info.main_phone') }}!
@endsection

@section('javascripts')
    <script src="{{ asset('js/wb.carousel.effects.min.js') }}"></script>
    <script src="{{ asset('js/model.js') }}"></script>
@endsection

@section('content')

    <div id="container">

        <ul class="list-inline">
            <li><a href="/#catalog">Каталог товаров</a></li>
            <li><a href="{{ route('category', ['catAlias' => $product->category->alias]) }}">{{ $product->category->name }}
                    оптом</a></li>
            <li>{{ $product->title }} оптом</li>
        </ul>


        <h1>{{ $product->name }}</h1>

        <a class="button3" href="#bid-modal" rel="modal:open"
           style="padding: 5px 45px; text-decoration: none; font-weight: normal; font-size: 20px!important;">Купить
            оптом</a>
        <div style="clear:both; margin-bottom:25px;"></div>

        @include('products.slider', ['images' => $product->images])

        @if($product->is_sale)
            <span style="background: rgba(0, 128, 0, 0.55); color: #fff;padding: 0 7px;font-size: 20px;">Акция</span>
        @endif

        {!! $product->body !!}


        @if (count($productsInCategory))
            <h4 style="font-size:30px; margin:20px 0 ">Смотрите также</h4>
            @include('products.list', ['products' => $productsInCategory, 'category' => $product->category])
        @endif
        <div style="clear:both"></div>
    </div>

    @include('privilege')
    <noindex>
        @include('trust')
        @include('howWork')
        @include('sertificates')
    </noindex>
@stop



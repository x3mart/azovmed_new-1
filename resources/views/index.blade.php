@extends('layouts.main')

@section('title', 'Azovmed - ортопедические товары оптом, производство медицинских изделий, медицинские товары оптом | ИП Азовцева С. Н. | ИП Азовцев В. С.')
@section('meta_description')
    Компания Azovmed предлагает востребованные товары медицинского назначения. Мы производим и реализуем продукцию для использования в ортопедии, травматологии, реабилитации.
@endsection

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/fancybox/jquery.fancybox-1.3.0.css') }}">
@endsection

@section('javascripts')
    <script src="{{ asset('js/jquery.ui.effect.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ui.effect-fade.min.js') }}"></script>
    <script src="{{ asset('js/wb.carousel.effects.min.js') }}"></script>
    <script src="{{ asset('js/wwb10.min.js') }}"></script>

    <script src="{{ asset('js/fancybox/jquery.easing-1.3.pack.js') }}"></script>
    <script src="{{ asset('js/fancybox/jquery.fancybox-1.3.0.pack.js') }}"></script>
    <script src="{{ asset('js/fancybox/jquery.mousewheel-3.0.2.pack.js') }}"></script>

    <script src="{{ asset('js/index.js') }}"></script>
@endsection

@section('content')
    @include('overview')
    <div id="container">
        <h1 style="text-align: center;">Медицинские и ортопедические товары оптом</h1>
        <noindex>
            <div id="catalog">
                    @include('products.list', ['products' => $products])
                <div style="clear:both"></div>
            </div>
        </noindex>

        {{--<h2 style="text-align: center;">Изделия из шерсти (без РУ)</h2>--}}
        {{--<noindex>--}}
            {{--<div id="catalog">--}}
                {{--@foreach($alt_cats as $alt_cat)--}}
                    {{--@include('product/list', ['products' => $alt_cat->products, 'category' => $alt_cat])--}}
                {{--@endforeach--}}
                {{--<div style="clear:both"></div>--}}
            {{--</div>--}}
        {{--</noindex>--}}
    </div>
    @include('trust')
    @include('privilege')
    @include('bid')
    @include('howWork')
    @include('production')
    @include('sertificates')
    @include('reviews')
    @include('officeAddress')
    @include('productionAddress')
@stop


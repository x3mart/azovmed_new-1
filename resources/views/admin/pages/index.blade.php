@extends('layouts.admin')

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
    {{-- @include('modal.bid') --}}
    {{-- @include('admin.pages.header') --}}
    <livewire:pages.success-modal :key="'success'.now()"/>
    <livewire:pages.header :key="'header'.now()"/>
    <livewire:pages.overview :key="'overview'.now()"/>

    {{-- @include('trust') --}}
    <livewire:pages.privilege :key="'privilege'.now()"/>
    {{-- @include('bid') --}}
    <livewire:pages.how-work :key="'how'.now()"/>
    <livewire:pages.production :key="'production'.now()"/>
    {{-- @include('sertificates') --}}
    {{-- @include('reviews') --}}
    {{-- @include('officeAddress') --}}
    {{-- @include('productionAddress') --}}
    <livewire:pages.footer :key="'footer'.now()"/>
@stop


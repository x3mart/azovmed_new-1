@extends('layouts.main')

@section('title')
    {{ $category->title }} оптом от производителя — купить недорого
@endsection

@section('meta_description')
    {{ $category->title }} купить оптом от российского прозводителя. Приятные цены. Доставим по России и странам СНГ. Звоните {{ config('info.main_phone') }}!
@endsection

@section('content')
    <div id="container">

        <ul class="list-inline">
            <li><a href="/#catalog">Каталог товаров</a></li>
            <li>{{ $category->title }} производство</li>
        </ul>

        <h1>{{ $category->name }} оптом от производителя</h1>
        <p>{{ $category->body }}</p>

        @include('products.list', ['products' => $category->products])
        <div style="clear:both"></div>
    </div>

    <livewire:pages.privilege :key="'privilege'.now()"/>
    <noindex>
        <livewire:pages.how-work :key="'how'.now()"/>
    </noindex>
@stop

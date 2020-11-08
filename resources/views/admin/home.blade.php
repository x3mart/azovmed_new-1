@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="col-md-6">
                        @foreach($categories as $category)
                            <h4>{{ $category->name }}</h4>
                            @foreach($category->products as $product)
                                <li>
                                    <a href="{{ route('product.edit', ['product' => $product->id]) }}">
                                        {{ $product->name }}
                                    </a>
                                </li>
                            @endforeach
                        @endforeach
                    </div>

                    <div class="col-md-6">
                        <h4>Сортировка порядка товаров</h4>

                        <ul id="sortable" class="list-unstyled">
                            @foreach($products as $product)
                                <li id="{{$product->id}}" style=" cursor:pointer;">
                                    {{ $product->name }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

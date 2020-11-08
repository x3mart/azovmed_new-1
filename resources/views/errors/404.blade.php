@extends('layouts.main')

@section('content')
    <div id="container">
        <h1>Страница не найдена</h1>
        <h2>Возможно вы искали:</h2>
        <ul>
            @foreach($categories as $category)
                <li><a style="color:#000; line-height:24px;" href="{{ route('category', ['catAlias' => $category->alias]) }}">{{ $category->name }}
                        оптом</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

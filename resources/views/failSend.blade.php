@extends('layouts.main')

@section('content')

    <div style="text-align: center;" id="container">
        <h1>
            @if(isset($errorName))
                {{ $errorName }}
            @else
                НЕИЗВЕСТНАЯ ОШИБКА!
            @endif
        </h1>
        <span style="color:#000000;font-family:'Roboto Lt';font-size:19px;letter-spacing:0.07px;">Для оформления заказа позвоните по номеру: {{ config('info.main_phone') }}</span>
    </div>

@endsection

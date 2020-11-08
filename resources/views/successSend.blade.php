@extends('layouts.main')

@section('javascripts')
    <script type="text/javascript">
        window.onload = function() {
            yaCounter31097371.reachGoal('order')
        }
    </script>
@endsection

@section('content')
    <div style="text-align: center;" id="container">
        <h1>ВАША ЗАЯВКА ПРИНЯТА!</h1>
        <span style="color:#000000;font-family:'Roboto Lt';font-size:19px;letter-spacing:0.07px;">С Вами свяжутся в ближайшее время</span>
    </div>
@endsection

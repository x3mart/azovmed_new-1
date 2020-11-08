@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Category New</div>
                    <div class="col-md-12">
                        <form action="{{ route('category.store') }}" method="post">
                            @csrf
                            <h2>Введите название категории</h2>
                            <input type="text" name="name" class="form-control">
                            <br>
                            <input type="submit" value="Добавить" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

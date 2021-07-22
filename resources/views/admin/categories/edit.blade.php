@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Category New</div>
                    <div class="col-md-12">
                        <form action="{{ route('category.update', ['category' => $category->id]) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <h2>Введите название категории</h2>
                            <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                            <br>
                            <textarea name="body" cols="40" rows="3" class="form-control">{{ $category->body }}</textarea>
                            <br>
                            <input type="checkbox" name="is_visible" value="1" @if($category->is_visible) checked @endif> Активна
                            <br>
                            <input type="submit" value="Сохранить" class="btn btn-primary" style="margin-top: 20px;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

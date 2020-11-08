@extends('layouts.admin')

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({selector: 'textarea'});</script>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Model Edit</div>
                    <div class="col-md-12">
                        <form action="{{ route('product.update', ['product' => $product]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        <br/>
                        <input class="form-control" type="text" name="name" value="{{ $product->name }}">
                        <br/>
                        <p>Путь {{ $product->alias }}</p>
                            <input type="checkbox" name="visible" value="1" @if($product->is_visible) checked @endif> Активен
                            <h4>Категория
                                <select name="catId">
                                    @foreach($categories as $category)
                                        @if(!$product->category))
                                            <option value="" selected disabled hidden>Выберите категорию</option>
                                        @endif
                                        <option @if(isset($product->category) && ($product->category->id == $category->id)) selected
                                                @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </h4>
                            <br/>
                            <br/>
                            <input name="id" type="hidden" value="{{ $product->id }}">
                            <textarea name="body" style="height:500px;" id="article-ckeditor">{{$product->body}}</textarea>
                            <br/>
                            <br/>
                            @if($product->images)
                                @foreach($product->images as $image)
                                    <div class="col-md-3">
                                        <div class="thumbnail">
                                            <img src="{{ asset($image->name) }}" style="width:100%">
                                            <div class="caption">
                                                <a class="btn btn-default"
                                                   href="{{ route('image.delete', ['image' => $image, 'product' => $product]) }}">Удалить
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="clearfix"></div>
                            <h4>Загрузить изображения</h4>
                            <input type="file" name="images[]" multiple/>
                            <br/>
                            <br/>
                            <input type="submit" value="Сохранить" class="btn btn-primary">
                            <a href="{{ route('product.delete', ['product' => $product->id]) }}" class="pull-right btn btn-danger">Удалить</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

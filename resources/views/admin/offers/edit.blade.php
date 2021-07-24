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
                        <form action="{{ route('offer.update', ['offer' => $offer]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            {{-- <h3>от</h3>
                            <input type="text" name="from" value="{{ $offer->from }}" class="form-control">
                            <br> --}}
                            <h3>Текст</h3>
                            <textarea name="body" style="height:500px;" id="article-ckeditor">
                                {!! $offer->body !!}
                            </textarea>
                            <br>
                            <h3>коммерческое предложение</h3>
                            <input type="file" name="kpfile" class="btn btn-primary">
                            <br>
                            <h3>карточка ИП</h3>
                            <input type="file" name="ipcard" class="btn btn-primary">
                            <br>
                            <input type="submit" value="Сохранить" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

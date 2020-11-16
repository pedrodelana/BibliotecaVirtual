@extends('layouts.app')

@section('title', "Biblioteca Virtual - Livros")
    
@section('section')
<div class="container main">
    <div class="row">
        @foreach($books as $book)
            <div class="book col-md-4 ">
                <div class="bg-secondary">
                    <img src="{{ asset("storage/images") . "/" . $book['img']}}" alt="">
                    <h3>{{$book['title']}}</h3>
                    <p>{{$book['subtitle']}}</p>
                </div>

            </div>
        @endforeach
    </div>
</div>
@endsection
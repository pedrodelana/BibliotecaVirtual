@extends('layouts.app')

@section('title', "Biblioteca Virtual - Livros")
    
@section('section')
<div class="container main" style="background-color: rgb(173, 170, 170);" >
    <div class="row">
        @foreach($books as $book)
            <div class="book col-md-4">
                <img src="{{$book['img']}}" alt="">
                <h3>{{$book['title']}}</h3>
                <p>{{$book['subtitle']}}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
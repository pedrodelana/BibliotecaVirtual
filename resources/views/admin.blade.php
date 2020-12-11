@extends('layouts.app')

@section('title', "Biblioteca Virtual - Modo Administrador")
    
@section('section')


<div class="container"> 
    <div class="adicionar">
        <a class="bg-success" data-toggle="modal" data-target="#addBook" href="javascript:void(0)">Adicionar</a>
    </div>
</div>
<div class="container main">
    <div class="row">
        @foreach($books as $book)
            <div class="book col-md-4 ">
                <div class="bg-secondary bookheight">
                    <img src="{{ asset("storage/images") . "/" . $book['img']}}" alt="">
                    <h3>{{$book['title']}}</h3>
                    <p>{{$book['subtitle']}}</p>
                </div>
                <div class="deledit">
                    <form action="/books/delete/{{$book['id']}}" method="POST">
                        {!! csrf_field() !!}
                    <button class="bg-danger" type="submit">Deletar</button>                    
                    </form>
                    <form action="/books/edit/{{$book['id']}}" method="GET">
                    <button class="bg-warning">Modificar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
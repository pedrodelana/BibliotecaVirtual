@extends('layouts.app')

@section('title', "Biblioteca Virtual - Livros")
    
@section('section')


<div class="container main">
    <div class="row">
        <form action="/books/update/{{$book->id}}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
        <div class="form-group">
            <label for="exampleFormControlInput1">Nome do livro</label>
            <input type="text" value="{{$book->title}}" maxlength="50" class="form-control" id="nameBook" name="title" placeholder="Nome do Livro">
          </div>
          <div class="form-group">
              <label for="exampleFormControlInput1">Descrição do Livro</label>
              <input type="text" value="{{$book->subtitle}}" maxlength="300" class="form-control" id="descriptionBook" name="subtitle" placeholder="Escrever uma sinópse sobre o livro">
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile1">Inserir imagem do livro</label>
              <input type="file" class="form-control-file" id="imageBook" name="img">
            </div>  
            <button type="submit">Salvar</button>   
        </form>    
    </div>
</div>
@endsection
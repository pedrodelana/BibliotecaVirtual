@extends('layouts.app')

@section('title', "Biblioteca Virtual - Login")
    
@section('section')

<div class="space"></div>

<form class="editrowlogin">
    <div class="form-group">
      <label for="exampleInputUser1">Usuário</label>
      <input type="text" maxlength="20" class="form-control" id="exampleInputUser1" aria-describedby="userHelp" placeholder="Usuário">      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Senha</label>
      <input type="password" maxlength="15" class="form-control" id="exampleInputPassword1" placeholder="Senha">
      <small id="passwordHelp" class="form-text text-muted">Nunca vamos compartilhar sua senha, com ninguém.</small>
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Lembrar de mim</label>
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
  </form>

@endsection
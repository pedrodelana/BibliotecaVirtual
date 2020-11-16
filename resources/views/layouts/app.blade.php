<!DOCTYPE html>
<html>
<head>
    <title> @yield('title') </title>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body> 
    <header>
        <div class="container">
            <div class="row">
                <div class="links">
                    <a href="/">
                        <img src="img/bv_logo_completa.png" alt="">
                    </a>
                    <a href="/admin" class="adminlink">Modo Administrador</a>
                </div>
            </div>
        </div>
    </header>

    <div class="space"></div>
    @yield('section')
  
  <!-- Modal -->
  <div class="modal fade" id="addBook" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="/books" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Adicionar Livro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">            
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nome do livro</label>
                  <input type="text" maxlength="50" class="form-control" id="nameBook" name="title" placeholder="Nome do Livro">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Descrição do Livro</label>
                    <input type="text" maxlength="300" class="form-control" id="descriptionBook" name="subtitle" placeholder="Escrever uma sinópse sobre o livro">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Inserir imagem do livro</label>
                    <input type="file" class="form-control-file" id="imageBook" name="img">
                  </div>            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Salvar alterações</button>
        </div>
        </form>
      </div>
    </div>
  </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    
</body>
</html>
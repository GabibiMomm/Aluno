<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota média do Aluno</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="fundo">
      <div class="corpo">
          <center><h1>Cadastro e Nota de Alunos(as)</h1></center>
          <br><br>
          <form class="row g-3 needs-validation" novalidate id="fAluno">
              <div class="col-md-4">
                <label for="iNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="iNome" value="" required>
                
              </div>
              <div class="col-md-4">
                <label for="iSobrenome" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="iSobrenome" value="" required>
              </div>

              <div class="col-md-4">
                <label for="iEmail" class="form-label">E-mail do Aluno(a)</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="iEmail">@</span>
                  <input type="text" class="form-control" id="iEmail" aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                    O e-mail está incorreto.
                  </div>
                </div>
              </div>

              
              <div class="col-md-4">
                  <label for="iNota1" class="form-label">Nota 1</label>
                  <input type="number" class="form-control" id="iNota1" name="iNota1" required>
                </div>

              <div class="col-md-4">
                  <label for="iNota2" class="form-label">Nota 2</label>
                  <input type="number" class="form-control" id="iNota2" name="iNota2" required>
                </div>

              <div class="col-md-4">
                  <label for="iNota3" class="form-label">Nota 3</label>
                  <input type="number" class="form-control" id="iNota3" name="iNota3" required>
                </div>
                <br>
                <center>
                <div class="botao">
                  <br>
                  <input type="button" value="Cadastrar aluno" id="bNota">
                  <input type="button" id="lista" value="Listar Alunos" >
                  <input type="button" id="reset" value="Limpar" >
                </div>
                </center>
        
              <div id="resultado" class="resultado"></div>
            </form>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="media.js"></script>
</body>
</html>
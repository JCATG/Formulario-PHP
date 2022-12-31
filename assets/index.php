<!DOCTYPE html>
<html lang="pt-br">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="./css/style.css">
     <title>Crude</title>
</head>

<body>
     <div id="crude">
          <div class="crude-center">
               <form action="recebe.php" method="post">
                    <div class="mb-3 row">
                         <label for="staticEmail" class="col-sm-2 col-form-label">Nome</label >
                         <div class="col-sm-10">
                              <input type="text" class="form-control" id="campoNome" name="campoNome" required >
                         </div>
                    </div>
                    <div class="mb-3 row">
                         <label for="inputPassword" class="col-sm-2 col-form-label">Cidade</label >
                         <div class="col-sm-10">
                              <input type="text" class="form-control" id="campoCidade" name="campoCidade" required >
                         </div>
                    </div>
                    <div class="mb-3 row">
                         <label for="inputPassword" class="col-sm-2 col-form-label">Idade</label >
                         <div class="col-sm-10">
                              <input type="text" class="form-control" id="campoIdade" name="campoIdade" required>
                         </div>
                    </div>
                    <div class="mb-3 row">
                         <label for="inputPassword" class="col-sm-2 col-form-label">Telefone</label>
                         <div class="col-sm-10">
                              <input type="tel" class="form-control" id="campoTelefone" name="campoTelefone"  required>
                         </div>
                    </div>
                    <div class="mb-3 row">
                         <label for="inputPassword" class="col-sm-2 col-form-label">Endereço</label>
                         <div class="col-sm-10">
                              <input type="text" class="form-control" id="campoEndereco" name="campoEndereco"  required>
                         </div>
                    </div>
                    <div class="btn">
                       <button type="submit" class="btn btn-outline-success" onclick="alerta()" >Cadastrar</button>
                       <button type="reset" class="btn btn-outline-warning" >Limpar</button>
                    </div>
               </form>
          </div>
     </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " ></script> 
<script src="./js/custom.js"></script>

</html>
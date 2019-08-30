<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda Telefonica</title>
    <?php
       include("../css/bootstrap.php");
     ?>

</head>

<body>

<?php
  include("../view/menu.php");
?>
<forms action="">
  <div class="forms-group">
   <label for="nome">Nome</label><span class"text-red">*</span>
   <input type="text" name="nome" id="nome" required class="form-control">
  </div>

  <div class="forms-group">
   <label for="Telefone">Telefone</label><span class"text-red">*</span>
   <input type="text" name="telefone" id="telefone" required class="form-control">
  </div>

   <div class="forms-group">
   <label for="Celular">Celular</label><span class"text-red">*</span>
   <input type="text" name="celular" id="celular" required class="form-control">
  </div>
  
</forms>


<!--  Aqui podemos colocar o codigo HTML -->
<?php
  include("../js/bootstrap.php");
?>
</body>
</html>
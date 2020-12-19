<?php 

require "header.php";

$marca = require "../banco_dados/listaBuscaMarcaBd.php";
// echo '<pre>';
//         print_r ($marca);
//         echo '</pre>';
?>
<link rel="stylesheet" href="../css/button.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

<div class="container">

<div class="row justify-content-center">
    <form action="../banco_dados/editarMarcaBd.php" method="POST">
      <div class="form-group">
        <br>
        <input type="number" class="form-control" name="id_marcas" readonly value="<?= $marca[0]['id_marcas']?>"> 
        <br>
      <label class="nomeMarca">Nome da Marca</label>
      <input type="text" class="form-control" id="nomeMarca" name="nomeMarca" required value="<?= $marca[0]['nome_marca']?>">
      </div>
      <div class="form-group">
       
      <button type="submit"class="btn btn-primary">Salvar</button> 
      </div>
    </form>
  </div>

 



  <?php
    if(isset($_GET['msg'])){?>

    <div class="toast" role="alert">

      O produto <?php echo $_GET['nomeMarca']; ?> foi cadastrado
    </div>
   <?php } ?>


<?php 

require "footer.php";

?>
  
  <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
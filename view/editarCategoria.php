<?php 

require "header.php";

$categoria = require "../banco_dados/listaBuscacategoriaBd.php";
// echo '<pre>';
//         print_r ($marca);
//         echo '</pre>';
?>
<link rel="stylesheet" href="../css/button.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

<div class="container">

<div class="row justify-content-center">
    <form action="../banco_dados/editarCategoriaBd.php" method="POST">
      <div class="form-group">
        <br>
        <input type="number" class="form-control" name="id_categoria" readonly value="<?= $categoria[0]['id_categoria']?>"> 
        <br>
      <label class="nomeCategoria">Nome da Categoria</label>
      <input type="text" class="form-control" id="nomeCategoria" name="nomeCategoria" required value="<?= $categoria[0]['nome_categoria']?>">
      </div>
      <div class="form-group">
       
      <button type="submit"class="btn btn-primary">Salvar</button> 
      </div>
    </form>
  </div>

 


<!-- 
  <?php
    if(isset($_GET['msg'])){?>

    <div class="toast" role="alert">

      O produto <?php echo $_GET['nomeCategoria']; ?> foi cadastrado
    </div>
   <?php } ?> -->


<?php 

require "footer.php";

?>
  
  <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
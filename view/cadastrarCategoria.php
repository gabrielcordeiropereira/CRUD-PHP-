<?php 

require "header.php";
$_POST['acao'] = "listar";
$result = require_once "../banco_dados/listarCategoriaBd.php";

?>
<link rel="stylesheet" href="../css/button.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

  <div class="container">
    <div class="row justify-content-center">
      <form action="../banco_dados/cadastroCategoriaBd.php" method="POST">
        <div class="form-group">
        <label for="nomeCategoria">Nome da Categoria</label>
        <input type="text" class="form-control" id="nomeCategoria" name="nomeCategoria" required value="">
        </div>
        <div class="form-group">
        <button type="submit"class="btn btn-primary">Salvar</button> 
        </div>
      </form>
    </div>

    <br><br>
    <table class="table" id="myTable">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Categoria</th>
          <th >Ação</th>
          <th >alterar</th>
        </tr>
      </thead>
      <tbody>

      <?php 
      // echo '<pre>';
      // print_r ($result);
      // echo '</pre>';
      foreach ($result as $key => $value) {?>
        <tr>
          <th scope="row"><?= $value['id_categoria']?></th>
          <td><?= $value['nome_categoria']?></td>
          <td><a href="../banco_dados/excluirCategoriaBd.php?id=<?= $value['id_categoria']?>" class="btn btn-danger">Delete</a></td>
          <td><a href="editarCategoria.php?id=<?= $value['id_categoria']?>" type="button"class="btn btn-info">Update</a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  
  
  
  
  
  
  </div>
  <!-- <?php
    if(isset($_GET['msg'])){?>

    <di class="alert alert-success" role="alert">

      A categoria <?php echo $_GET['nomeCategoria']; ?> foi cadastrada
    </>
   <?php } ?> -->

<?php 

require "footer.php";

?>
<script>
  $(document).ready( function () {
  $('#myTable').DataTable();
 } );
 </script>
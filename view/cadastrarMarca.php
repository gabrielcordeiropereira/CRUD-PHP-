<?php 

require "header.php";
$_POST['acao']="listar";
$result = require_once "../banco_dados/listarMarcasBd.php";

?>
<link rel="stylesheet" href="../css/button.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

<div class="container">

<div class="row justify-content-center">
    <form action="../banco_dados/cadastroMarcaBd.php" method="POST">
      <div class="form-group">
      <label class="nomeMarca">Nome da Marca</label>
      <input type="text" class="form-control" id="nomeMarca" name="nomeMarca" required value="">
      </div>
      <div class="form-group">
      <button type="submit"class="btn btn-primary">Salvar</button> 
      </div>
    </form>
  </div>

 <!-- <div class="table-responsive style-table">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Marca</th>
          <th colspan="2">excluir</th>
          <th colspan="2">alterar</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($result as $key => $value) {?>
          <tr>
            <th scope="row"><?= $value['id_marcas']?></th>
            <td><?= $value['nome_marca']?></td>
            <td><a href="#" type="button"class="btn btn-danger">Delete</a></td>
            <td><a href="" type="button"class="btn btn-info">Update</a></td>
          </tr>
          <?php } ?>
      </tbody>
    </table>

    
  </div> -->
  <br><br>
  <table class="table" id="myTable">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Marca</th>
          <th >Ação</th>
          <th >alterar</th>
        </tr>
      </thead>

      <tbody>

        <?php 
        /*echo '<pre>';
        print_r ($result);
        echo '</pre>';*/
        foreach ($result as $key => $value) {?>
          <tr>
            <th scope="row"><?= $value['id_marcas']?></th>
            <td><?= $value['nome_marca']?></td>
            <td><a href="../banco_dados/excluirMarcaBd.php?id=<?= $value['id_marcas']?>" class="btn btn-danger">Delete</a></td>
            <td><a href="editarMarcas.php?id=<?= $value['id_marcas']?>" type="button"class="btn btn-info">Update</a></td>
          </tr>
          <?php } ?>
      </tbody>
    </table>

  
</div>

<!-- 
  <?php
    if(isset($_GET['msg'])){?>

    <div class="toast" role="alert">

      O produto <?php echo $_GET['nome_marca']; ?> foi cadastrado
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
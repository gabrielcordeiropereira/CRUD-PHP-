<?php
require "header.php";
$_POST['acao']="listar";
$recebe = require_once "../banco_dados/produtosControler.php";
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  <div class="container">
    
    <table class="table" id="myTable">
      <thead class="thead-dark">
        <tr>
          <th>Codigo</th>
          <th>Nome produto</th>
          <th>Categoria produto</th>
          <th>Marca produto</th>
          <th>Estoque</th>
          <th>Quantidade</th>
          <th>Preco</th>
          <th>Ação</th>
          <th>alterar</th>
        </tr>
        
      </thead>
      <tbody>
      <?php foreach ($recebe as $key => $value) {?>
        <tr>
          <th scope="row"><?= $value['idProdutos']?></th>
          <td><?= $value['nome']?> </td>
          <td><?= $value['categoria']?> </td>
          <td><?= $value['marca']?> </td>
          <td><?= $value['estoque']?> </td>
          <td><?= $value['quantidade']?> </td>
          <td><?= $value['preco']?> </td>
          <td><a href="../banco_dados/excluiProdutosBd.php?id=<?= $value['idProdutos']?>" class="btn btn-danger">Deletar</a></td>
          <td><a href="editarProduto.php?id=<?= $value['idProdutos']?>" class="btn btn-info">Editar</a></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>


<?php 

require "footer.php";

?>

 
<script>
  $(document).ready( function () {
  $('#myTable').DataTable();
  } );
</script>
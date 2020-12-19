<?php
require "header.php";
$_POST['acao']="listar";
$recebe = require_once "../banco_dados/produtosControler.php";
?>

  <div class="container">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Nome produto</th>
          <th scope="col">Categoria produto</th>
          <th scope="col">Marca produto</th>
          <th scope="col">Estoque</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Preco</th>
          <th colspan="2">Ação</th>
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
          <td> <a href="../banco_dados/excluiProdutosBd.php?id=<?= $value['idProdutos']?>" class="btn btn-danger">Deletar</a></td>
          <td><a href="#" class="btn btn-info">Editar</a></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>


<?php 

require "footer.php";

?>
<?php
require "header.php";
$produto = require_once "../banco_dados/listarBuscaProdutoBd.php";


echo '<pre>';
      print_r ($produto);
        echo '</pre>';
?>


<br><br>

  <div class = "container">

    <div class = "justify-content-center">
    <div class="form-group">
    <form action="../banco_dados/editarProdutosBd.php" method="POST">
      <label for="">Identificador do Produto</label>
      <input class="form-control" type="number" readonly name="idProduto" id="idProduto" value="<?= $produto[0]['id_produtos']?>">
      <label for="">Nome Produto</label>
      <input class="form-control" type="text" name="inputNome" id="inputNome" value="<?= $produto[0]['nome_produto']?>">
      <label for="">Categoria Produto</label>
      <input class="form-control" type="text" name="nomeCategoria" id="nomeCategoria" readonly value="<?= $produto[0]['categoria_produto']?>">
      <label for="">Marca Produto</label>
      <input class="form-control" type="text" name="marcaProduto" id="marcaProduto" readonly value="<?= $produto[0]['marca_produto']?>">
      <label for="">Estoque Produto</label>
      <input class="form-control" type="number" name="estoqueProduto" id="estoqueProduto" value="<?= $produto[0]['estoque_produto']?>">
      <label for="">Quantidade Produto</label>
      <input class="form-control" type="number" name="quantidadeProduto" id="quantidadeProduto" value="<?= $produto[0]['quantidade_produto']?>">
      <label for="">Preço do Produto</label>
      <input class="form-control" type="text" name="precoProduto" id="precoProduto" value="<?= $produto[0]['preco_produto']?>">
      </div>
      <div class="form-group">
        <button type="submit"class="btn btn-primary">Salvar</button> 
      </div>
  
  
    </form>

    </div>
  </div>












<?php 

require "footer.php";

?>
 
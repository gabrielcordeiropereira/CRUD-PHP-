<?php
require "bd.php";

$sqlProdutos = "SELECT * FROM produtos WHERE id_produtos = {$_GET['id']}";
$result = mysqli_query($link,$sqlProdutos);
$lista_produtos = array();
$cont = 0;

while($linha = mysqli_fetch_assoc($result)) {

  $lista_produtos[$cont]['id_produtos'] = $linha['id_produtos'];
  $lista_produtos[$cont]['nome_produto'] = $linha['nome_produto'];
  $lista_produtos[$cont]['categoria_produto'] = $linha['categoria_produto'];
  $lista_produtos[$cont]['marca_produto'] = $linha['marca_produto'];
  $lista_produtos[$cont]['estoque_produto'] = $linha['estoque_produto'];
  $lista_produtos[$cont]['quantidade_produto'] = $linha['quantidade_produto'];
  $lista_produtos[$cont]['preco_produto'] = $linha['preco_produto'];
  $cont ++;

}
return $lista_produtos;
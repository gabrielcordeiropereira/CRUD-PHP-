<?php
require "bd.php";
if(isset($_POST['acao']) && $_POST['acao']=="listar"){
$querySelecionar = "SELECT * FROM produtos";
  $result = mysqli_query ($link, $querySelecionar);
  $lista = [];
  $cont = 0;
  while ($row = mysqli_fetch_assoc ($result)) 
  {
    $lista[$cont]['nome']= $row['nome_produto'];
    $lista[$cont]['categoria']= $row['categoria_produto'];
    $lista[$cont]['marca']= $row['marca_produto'];
    $lista[$cont]['estoque']= $row['estoque_produto'];
    $lista[$cont]['quantidade']= $row['quantidade_produto'];
    $lista[$cont]['preco']= $row['preco_produto'];
    $lista[$cont]['idProdutos']= $row['id_produtos'];
    $cont++;
  }
  return $lista;
}

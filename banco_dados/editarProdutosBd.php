<?php
require "bd.php";

$idProduto = $_POST["id_produtos"];
$nomeProduto = $_POST["nome_produto"];
$categoriaProduto = $_POST["categoria_produto"];
$marcaProduto = $_POST["marca_produto"];
$estoqueProduto = $_POST["estoque_produto"];
$quantidadeProduto = $_POST["quantidade_produto"];
$precoProduto = $_POST["preco_produto"];
$sqliProduto = "UPDATE produtos SET nome_produto = '$nomeProduto', categoria_produto = '$categoriaProduto', marca_produto = '$marcaProduto', estoque_produto = '$estoqueProduto', quantidade_produto = '$quantidadeProduto', preco_produto = $precoProduto WHERE id_produtos = '$idProduto'";

$result = mysqli_query($link, $sqliProduto);

header('Location: ../view/listaProdutos.php');
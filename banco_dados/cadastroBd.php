<?php
require "bd.php";

$inputNome = $_POST["inputNome"];
$inputCategoria = $_POST["inputCategoria"];
$inputMarcas = $_POST["inputMarcas"];
$inputEstoque = $_POST["inputEstoque"];
$inputQuantidadePedido = $_POST["inputQuantidadePedido"];
$inputPreco = $_POST["inputPreco"];


$sqlQuerydeCadastro = "insert into produtos(nome_produto, categoria_produto, marca_produto, estoque_produto, quantidade_produto, preco_produto)
values('{$inputNome}','{$inputCategoria}','{$inputMarcas}','{$inputEstoque}','{$inputQuantidadePedido}','{$inputPreco}')";
$result = mysqli_query($link,$sqlQuerydeCadastro);

header("Location: ../view/cadastrarProdutos.php?msg=true&nome={$inputNome}");


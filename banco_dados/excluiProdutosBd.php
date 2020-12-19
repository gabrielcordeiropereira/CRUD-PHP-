<?php
require "bd.php";

$idProduto = $_GET['id'];
$sqlExcluir = "Delete from produtos where id_produtos = {$idProduto}";//não esquecer o WHERE
$result = mysqli_query($link, $sqlExcluir);

header('Location: ../view/listaProdutos.php');
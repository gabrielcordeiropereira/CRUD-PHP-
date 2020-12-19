<?php
require "bd.php";

$nomeCategoria = $_POST["nomeCategoria"];
$idCategoria = $_POST["id_categoria"];
$sqliCategoria = "UPDATE categorias SET nome_categoria = '$nomeCategoria' WHERE id_categoria = $idCategoria";
$result = mysqli_query($link, $sqliCategoria);


header("Location: ../view/cadastrarCategoria.php?");
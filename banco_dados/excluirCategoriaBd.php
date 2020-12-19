<?php
require "bd.php";

$idCategoria = $_GET['id'];
$sqliExcluir =  "DELETE FROM categorias WHERE id_categoria = {$idCategoria}";
$result = mysqli_query($link, $sqliExcluir);

header('Location: ../view/cadastrarCategoria.php');
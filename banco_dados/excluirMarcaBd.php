<?php
require "bd.php";

$idMarca = $_GET['id'];
$sqliExcluir =  "DELETE FROM marcas WHERE id_marcas = {$idMarca}";
$result = mysqli_query($link, $sqliExcluir);

header('Location: ../view/cadastrarMarca.php');
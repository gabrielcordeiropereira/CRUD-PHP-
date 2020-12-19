<?php
require "bd.php";

$nomeMarca = $_POST["nomeMarca"];
$idMarca = $_POST["id_marcas"];
$sqliMarca = "UPDATE marcas SET nome_marca = '$nomeMarca' WHERE id_marcas = $idMarca";//não esquecer do where
$result = mysqli_query($link, $sqliMarca);



header("Location: ../view/cadastrarMarca.php?");
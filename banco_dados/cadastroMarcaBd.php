<?php
require "bd.php";

$nomeMarca = $_POST["nomeMarca"];
$sqliMarca = "insert into marcas(nome_marca)
values('{$nomeMarca}')";
$result = mysqli_query($link, $sqliMarca);

header("Location: ../view/cadastrarMarca.php?msg=true&nome={$nomeCategoria}");
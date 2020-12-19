<?php
require "bd.php";

$nomeCategoria = $_POST["nomeCategoria"];
$sqliCategoria = "insert into categorias(nome_categoria)
values('{$nomeCategoria}')";

$result = mysqli_query($link, $sqliCategoria);

header("Location: ../view/cadastrarCategoria.php?msg=true&nome={$nomeCategoria}");
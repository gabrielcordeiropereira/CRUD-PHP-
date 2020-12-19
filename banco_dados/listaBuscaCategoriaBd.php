<?php
require "bd.php";

$sqliCategoria = "SELECT * FROM categorias WHERE id_categoria = {$_GET['id']}";
$result = mysqli_query($link, $sqliCategoria);
$lista_categoria = array();
$cont = 0;

while($linha = mysqli_fetch_assoc($result)){

  $lista_categoria[$cont]['id_categoria'] = $linha['id_categoria'];
  $lista_categoria[$cont]['nome_categoria'] = $linha['nome_categoria'];
  $cont ++;

}

return $lista_categoria;
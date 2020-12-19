<?php
require "bd.php";

$sqlCategorias = "SELECT * FROM categorias";
$result = mysqli_query($link,$sqlCategorias);
$lista_categorias = array();
$cont = 0;

while($linha = mysqli_fetch_assoc($result)) {

  $lista_categorias[$cont]['id_categoria'] = $linha['id_categoria'];
  $lista_categorias[$cont]['nome_categoria'] = $linha['nome_categoria'];
  $cont ++;
}
return $lista_categorias;
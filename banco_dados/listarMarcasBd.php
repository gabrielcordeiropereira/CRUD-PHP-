<?php
require "bd.php";

$sqlMarcas = "Select * FROM marcas";
$result = mysqli_query($link,$sqlMarcas);
$lista_marcas = array();
$cont = 0;

while($linha = mysqli_fetch_assoc($result)) {

  $lista_marcas[$cont]['id_marcas'] = $linha['id_marcas'];
  $lista_marcas[$cont]['nome_marca'] = $linha['nome_marca'];
  $cont ++;

}
return $lista_marcas;

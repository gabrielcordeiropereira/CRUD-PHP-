<?php 

require "header.php";
$listaCategorias = require "../banco_dados/listarCategoriaBd.php";
$listaMarcas = require "../banco_dados/listarMarcasBd.php"
?>
  <link rel="stylesheet" href="../css/button.css">
  <link rel="stylesheet" href="../css/form.css">
    <!--Final do cabeçalho-->
   
    <!--Nome do Produto-->
    <form action="../banco_dados/cadastroBd.php" method="POST" class="container">
      
      <div class="form-group">
      <label for="inputNome" class="form-label">Nome do Produto</label>
        <div class="">
          <input type="text" class="form-control" id="inputNome" name="inputNome" placeholder="Nome do Produto" required>
        </div>
      </div>
    <!--Categoria do Produto-->
      <div class="form-group">
        <label class=" col-form-label" for="inputCategoria">Categoria</label>
    
            <select class="custom-select" id="inputCategoria" name="inputCategoria" required>
              
              <?php foreach($listaCategorias as $key => $value){ ?>

              <option value="<?= $value['id_categoria']?>"><?= $value['nome_categoria']?></option>
              <?php } ?>    
            </select>
        
      </div>
    <!--Marca do Produto-->
      <div class="form-group">
      <label class="form-label" for="inputMarcas">Marcas</label>
  
          <select class="custom-select my-1 mr-2" id="inputMarcas" name="inputMarcas" required>
            
            <?php foreach($listaMarcas as $key => $value){ ?>
            
            <option value="<?= $value['id_marcas']?>"><?=$value['nome_marca']?></option>
            <?php } ?>
          </select>
  
      </div>
    <!--Quantidade em Estoque-->
    <div class="form-group">
      <label for="inputEstoque" class="col-form-label">Estoque</label>
        <div class="">
          <input type="number" class="form-control" id="inputEstoque" name="inputEstoque"min="0" max="100" required>
        </div>
    </div>

    <!--Quantidade do Pedido-->
    <div class="form-group">
        <label for="inputQuantidadePedido" class="col-form-label">Quantidade do Pedido</label>
        <div class="">
          <input type="number" class="form-control" id="inputQuantidadePedido" name="inputQuantidadePedido" min="0" max="inputQuantidade" required>
        </div>
    </div>

    <div class="form-group">
        <label for="inputPreco" class="col-form-label">Preço</label>
        <div class="">
          <input type="text" class="form-control" id="inputPreco" name="inputPreco" placeholder="Preço"required>
        </div>
    </div>
    
    <!--botao-->
    <br>

    <button  type="submit"class="button" style="vertical-align:middle"><span>Cadastrar</span></button>
    </form>
  
 

    <?php
    if(isset($_GET['msg'])){?>

    <div class="alert alert-success" role="alert">

      O produto <?php echo $_GET['nome']; ?> foi cadastrado
    </div>
   <?php } ?>
  
 <?php 

require "footer.php";

?>
<?php 

require "header.php";

?>


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
    <a href="#"><img src="../imagens/banho.jpg" alt="Chuveiro" width="100%" height="350"></a>
      <div class="carousel-caption text-warning">
        <h3>banheiros</h3>
        <p><strong>Tudo para o seu banho</strong></p>
      </div>
    </div>
    <div class="carousel-item">
     <a href="#"><img src="../imagens/eletronico.jpg" alt="eletronicos" width="100%" height="350"></a>
      <div class="carousel-caption text-warning">
        <h3>Eletrônicos</h3>
        <p><strong>Novidades</strong></p>
      </div>
    </div>
    <div class="carousel-item">
    <a href="#"><img src="../imagens/eletrodomestico.jpg" alt="eletrodomesticos" width="100%" height="350"></a>
      <div class="carousel-caption text-warning">
        <h3>Eletrométicos</h3>
        <p><strong>Os melhores pro seu lar</strong></p>
      </div> 
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<?php 

require "footer.php";

?>

  
<?php 

require "header.php";

?>
  <link rel="stylesheet" href="../css/button.css">

  
</head>
<body>
<div class="fixed-top">

<a class="text-white h4" href="maps.php"><h1 class="bg-dark p-4 text-white">Mapas de Vendas</h1></a>

<div class="collapse" id="navbarToggleExternalContent">
 
 <div class="bg-dark p-4">
  <h5><a class="text-white h4" href="index.php">Mentoria GDG</a></h5>
   <span class="text-muted">Aplicação desafio.</span>
 </div>

 <nav class="navbar navbar-dark bg-dark">
     <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
       <li class="nav-item active">
        <a class="nav-link" href="cadastrarProdutos.php">Cadastrar Produtos <span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item active">
        <a class="nav-link" href="#">Listar Produtos</a>
       </li>
       <li class="nav-item active">
        <a class="nav-link" href="maps.php">Mapa de vendas</a>
       </li>
     </ul>
 <!-- tema dark-->
 </nav>

</div>

  <nav class="navbar navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </nav>
<!-- Final do Cabeçalho-->


</div>


<div>
  <br><br><br><br><br><br><br>

 </div>
    <div class="widget-box sample-widget">
      <div class="widget-header">
        <h2>Vendas crescendo</h2>
        <i class="fa fa-cog"></i>
      </div>
      <div class="widget-content">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/87118/sample-data-1.png">
      </div>
    </div>
    </div>
    </div>
    <div class="widget-box sample-widget">
      <div class="widget-header">
        <h2>Vendas crescendo 2</h2>
        <i class="fa fa-cog"></i>
      </div>
      <div class="widget-content">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/87118/sample-data-1.png">
      </div>
    </div>

  <script src="https://code.highcharts.com/stock/highstock.js"></script>
  <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/stock/modules/export-data.js"></script>

  <script src="../node_modules/jquery/dist/jquery.js"></script>
  <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

  <div id="container" style="height: 400px; width: 100%"></div>
    <!--teste gráfico maneiro-->
    

  <script type="text/javascript" src="../graficos.js"></script>
  </div>


<?php 

require "footer.php";

?>

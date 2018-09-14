
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Latest compiled and minified CSS and JS -->
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>/assets/img/logo.png"/>
<link rel="stylesheet" href="<?php echo base_url();?>css/reset.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/carousel.css"/>
    <title>Consultório Reabilita - Serviços</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background: rgba(0,123,255,0.5);">
  <a class="navbar-brand" href="home">Consultório Reabilita</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="home"> <i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a>
      <a class="nav-item nav-link active" href="servicos"> <i class="fa fa-ambulance fa-fw" aria-hidden="true"></i>&nbsp;Serviços <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="info"> <i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Informações Adicionais</a>
      <a class="nav-item nav-link" href="admin"><i class="fa fa-user fa-fw" aria-hidden="true"></i>&nbsp;Admin</a>
    </div>
  </div>
</nav>

<div class="container">
  <h1 align="center">Serviços</h2>
  <div id="servicos" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#servicos" data-slide-to="0" class="active"></li>
      <li data-target="#servicos" data-slide-to="1"></li>
      <li data-target="#servicos" data-slide-to="2"></li>
      <li data-target="#servicos" data-slide-to="3"></li>
      <li data-target="#servicos" data-slide-to="4"></li>
      <li data-target="#servicos" data-slide-to="5"></li>
      <li data-target="#servicos" data-slide-to="6"></li>
      <li data-target="#servicos" data-slide-to="7"></li>
    </ul>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url();?>/assets/img/inicial.jpg" alt="Especializações" style="width:100%;">
      </div>

      <div class="carousel-item">
        <a href="rpg">
        <img src="<?php echo base_url();?>/assets/img/rpg.jpg" alt="RPG" style="width:100%;">
      </div>

      <div class="carousel-item">
        <a href="cma">
        <img src="<?php echo base_url();?>/assets/img/cma.jpg" alt="CMA" style="width:100%;">
      </div>
    
      <div class="carousel-item">
        <a href="dryneedling">
        <img src="<?php echo base_url();?>/assets/img/dryneedling.jpg" alt="Dry Needling" style="width:100%;">
      </div>
  
      <div class="carousel-item">
        <a href="ventosa">
        <img src="<?php echo base_url();?>/assets/img/ventosa.jpg" alt="Ventosaterapia" style="width:100%;">
      </div>

      <div class="carousel-item">
        <a href="cinesio">
        <img src="<?php echo base_url();?>/assets/img/cinesio.jpg" alt="Cinesioterapia" style="width:100%;">
      </div>

      <div class="carousel-item">
        <a href="biofoto">
        <img src="<?php echo base_url();?>/assets/img/biofoto.jpg" alt="Biofotogrametria" style="width:100%;">
      </div>

      <div class="carousel-item">
        <a href="infra">
        <img src="<?php echo base_url();?>/assets/img/infra.jpg" alt="Termografia Infravermelha" style="width:100%;">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#servicos" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#servicos" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


</body>
</html>
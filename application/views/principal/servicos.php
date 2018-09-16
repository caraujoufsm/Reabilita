
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Latest compiled and minified CSS and JS -->
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/logo.png"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/reset.css"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/site.css"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
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
        <img src="<?php echo base_url();?>/assets/img/rpg.jpg" alt="RPG" style="width:100%;">
        <br>
        <h3 align="center">RPG</h3>
        <p>A reeducação postural global (RPG) consiste em exercícios e posturas usadas dentro da fisioterapia para combater alterações da coluna como escoliose,<br>
           corcunda e hiperlordose, além de outros problemas de saúde como dor de cabeça, nos joelhos, quadril, e até mesmo alterações como o pé chato, por exemplo.</p>
      </div>

      <div class="carousel-item">
        <img src="<?php echo base_url();?>/assets/img/cma.jpg" alt="CMA" style="width:100%;">
        <br>
        <h3 align="center">CMA</h3>
        <p>A Crochetagem Mioaponeurótica (Diafibrólise percutânea) é uma técnica inovadora de terapia manual, utilizada na fisioterapia. O diferencial dela<br>
           em relação a outras mais convencionais é que possibilita manipular regiões mais intrínsecas, inclusive as articulares, como cápsulas, ligamentos e músculos.<br>
           A função principal é o de tratar os pontos de tensão (trigger points) e preparar uma zona anatômica para receber um tratamento manipulativo.<br>
           A mesma tem como objetivo produzir um aumento da quantidade de sangue e recuperar a elasticidade e a plasticidade dos tecidos moles como os músculos e fáscias.</p>
      </div>
    
      <div class="carousel-item">
        <br>
        <img src="<?php echo base_url();?>/assets/img/dryneedling.jpg" alt="Dry Needling" style="width:100%;">
        <br>
        <h3 align="center">Dry Needling</h3>
        <p>O Dry Needling (Agulhamento à Seco) é uma técnica que utiliza agulhas de Acupuntura Sistêmica para desativar fibras musculares tensas que geram dor.<br> 
           Visa na diminuição da dor muscular. Pode ser empregado no tratamento de diversos distúrbios musculares locais, como torcicolos, “trigger points”,<br> 
           síndrome miofascial, cefaléia tencional, cervicalgias, dorsalgias, lombalgias, ciatalgias. O Dry Needling é um excelente recurso na diminuição e até mesmo<br> 
           na cura de dores musculares, podendo ser aplicado em combinações com outras terapias ou mesmo como uma terapia isolada e única.</p>
      </div>
  
      <div class="carousel-item">
        <img src="<?php echo base_url();?>/assets/img/ventosa.jpg" alt="Ventosaterapia" style="width:100%;">
         <br>
         <h3 align="center">Ventosaterapia</h3>
         <p>A ventosaterapia é um tipo de tratamento natural no qual são usadas ventosas para melhorar a circulação sanguínea em um local do corpo.<br> 
            Para isso, as ventosas criam um efeito de vácuo, que suga a pele, resultando em um aumento do diâmetro dos vasos sanguíneo no exato local.<br>
            Como resultado, existe uma maior oxigenação destes tecidos, permitindo a liberação de toxinas do sangue e do músculo com mais facilidade. </p>
      </div>

      <div class="carousel-item">
        <img src="<?php echo base_url();?>/assets/img/cinesio.jpg" alt="Cinesioterapia" style="width:100%;">
         <br>
         <h3 align="center">Cinesioterapia</h3>
         <p>A cinesioterapia é uma forma de tratamento que utiliza a atividade física com movimentos para favorecer o retorno da função músculo<br> 
            esquelética com o objetivo de manter, ou melhorar, o desempenho muscular, aliviando a dor, auxiliando no reequilíbrio muscular,<br>
            melhorando a amplitude articular e a postura.</p>
      </div>

      <div class="carousel-item">
        <img src="<?php echo base_url();?>/assets/img/biofoto.jpg" alt="Biofotogrametria" style="width:100%;">
        <br>
        <h3 align="center">Biofotogrametria</h3>
        <p> A Biofotogrametria computadorizada é uma ferramenta de avaliação postural que permite ao paciente uma melhor visualização da evolução do seu<br> 
           tratamento. Esse recurso é utilizado no consultório junto com o RPG, pois possibilita uma maior precisão e confiabilidade quanto à sua<br>
           evolução no tratamento fisioterapêutico.</p>
      </div>

      <div class="carousel-item">
        <img src="<?php echo base_url();?>/assets/img/infra.jpg" alt="Termografia Infravermelha" style="width:100%;">
        <br>
        <h3 align="center">Termografia Infravermelha</h3>
        <p>A termografia é um exame de imagem (avaliação) que registra e documenta a região de dor, facilitando entender o que está acontecendo com o paciente<br> 
           que possui dores, direcionando para um tratamento adequado para o seu caso clínico.<br>
           Além de poder ser realizado em todos os pacientes, o exame é indolor e pode ser aplicado em todo o corpo. A praticidade e a segurança de não haver<br> 
           contaminação são outras vantagens, uma vez que não se utiliza qualquer tipo de radiação ou contraste. É totalmente seguro e portanto não há contraindicação.</p>
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

<footer class="rodape-pagina">
   &copy; Cássio Araujo 2018
</footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Latest compiled and minified CSS and JS-->
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/logo.png"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/reset.css"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/site.css"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
    <title>Consultório Reabilita - Admin</title>
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
      <a class="nav-item nav-link" href="servicos"> <i class="fa fa-ambulance fa-fw" aria-hidden="true"></i>&nbsp;Serviços <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="info"> <i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Informações Adicionais</a>
      <a class="nav-item nav-link active" href="admin"><i class="fa fa-user fa-fw" aria-hidden="true"></i>&nbsp;Admin <span class="sr-only">(current)</span></a>
    </div>
  </div>
</nav>
   <?php if($this->session->flashdata("success")) : ?>
   <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
   <?php endif ?>
   
   <?php if($this->session->flashdata("danger")) : ?>
   <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
   <?php endif ?>
   
   <?php if($this->session->userdata("usuario_logado")) : ?>
   <h1> Area restrita </h1>
   <?= anchor("login/logout", "Sair", array("class" => "btn btn-primary")) ?>
   
   <?php else : ?>
   
   <h1>Login</h1>
   <?php
   echo form_open("login/autenticar");
   
   echo form_label("Email", "email");
    echo form_input(array(
        "name" => "email",
        "id" => "email",
        "class" => "form-control",
        "maxlength" => "255"
    ));

    echo form_label("Senha", "senha");
    echo form_password(array(
        "name" => "senha",
        "id" => "senha",
        "class" => "form-control",
        "maxlength" => "255"
    ));
    
    echo form_button(array(
        "class" => "btn btn-primary",
        "content" => "Login",
        "type" => "submit"
    ));

    echo form_close();
    ?>
   
   <?php endif ?>
   <footer class="rodape-pagina">
			&copy; Cássio Araujo 2018
</footer>
</body>
</html>
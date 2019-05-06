<html lang="en">
  <head>
      <title>Lean Eventos</title>
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
      <meta name="viewport" content="width=device-width">
      <link href="/leaneventos/css/leanevent.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
  <header>
      <div id="container">
        <div id="logo">
            <a href="<?php echo base_url(); ?>Iniciar/logedin"><img src="/leaneventos/imagenes/logo.png" alt="logo-img"/></a>
            <h1 class="logo-txt">LEANEVENTOS</p>
        </div>
        <nav>
          <ul>
          <li><a href="<?php echo base_url(); ?>Iniciar/logedin" class="selected">Incio</a></li>
            <li><a href="<?php echo base_url(); ?>Agent/voluntarios">Lista de Voluntarios</a></li>
            <li><a href="<?php echo base_url(); ?>Agent/business">Lista de Fundaciones</a></li>
            <li><a href="<?php echo base_url(); ?>Agent/event">Eventos</a></li>
            <li><a href="<?php echo base_url(); ?>Agent/profile">Agente</a></li>
            <li><a href="<?php echo base_url(); ?>Iniciar/logout">Log out</a></li>
          </ul>
        </nav>
      </div>
  </header>
  <main>
  <section id="showcase">
        <div class="slider-holder">
          <input type="radio" id="i1" name="images" checked />
          <input type="radio" id="i2" name="images" />
          <input type="radio" id="i3" name="images" />
          <div class="slide_img" id="one">			
              <img src="/leaneventos/imagenes/bannerlean1.jpg">
          </div>
          <div class="slide_img" id="two">
              <img src="/leaneventos/imagenes/bannerlean2.jpg" >
          </div>	
          <div class="slide_img" id="three">
              <img src="/leaneventos/imagenes/bannerlean3.jpg">	
          </div>
          <div id="nav_slide">
            <label for="i1" class="dots" id="dot1"></label>
            <label for="i2" class="dots" id="dot2"></label>
            <label for="i3" class="dots" id="dot3"></label>
          </div>
        </div>
  </section>
  </main>
  <footer>
    <p>
      Copyright &copy;2019 All rights reserved | This web is made with &#9825; by <span>DiazApps</span>
    </p>
  </footer>
  </body>
</html>

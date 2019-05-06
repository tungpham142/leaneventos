<?php
    $index = '';
    $about = '';
    $blog = '';
    $register = '';
    $contact = '';
    $login = '';
    $buy = '';

    $this->load->helper('url');
    $value = $this->uri->segment(1);
    if($value == '' || $value == 'index')
    {
        $index = 'selected';
    }
    elseif($value == 'aboutus')
    {
        $about = 'selected';
    }
    elseif($value == 'registrate')
    {
        $register = 'selected';
    }
    elseif($value == 'aboutus')
    {
        $about = 'selected';
    }
    elseif($value == 'contacto')
    {
        $contact = 'selected';
    }
    elseif($value == 'iniciar')
    {
        $login = 'selected';
    }
    elseif($value == 'boletos')
    {
        $buy = 'selected';
    }
    elseif($value == 'blog.html')
    {
        $blog = 'selected';
    }

?>

<html lang="en">
  <head>
      <title>Lean Eventos</title>
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
      <meta name="viewport" content="width=device-width">
      <link href="/leaneventos/css/leanevent.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
  <header>
      <div id="container">
        <div id="logo">
            <a href="<?php echo base_url(); ?>"><img src="/leaneventos/imagenes/logo.png" alt="logo-img"/></a>
            <h1 class="logo-txt">LEANEVENTOS</p>
        </div>
        <nav>
          <ul>
            <li><a href="<?php echo base_url(); ?>" class="<?php echo $index; ?>">Incio</a></li>
            <li><a href="<?php echo base_url(); ?>aboutus" class="<?php echo $about; ?>">Quienes Somos</a></li>
            <li><a href="<?php echo base_url(); ?>blog.html" class="<?php echo $blog; ?>">Blog</a></li>
            <li><a href="<?php echo base_url(); ?>registrate" class="<?php echo $register; ?>">Registrate</a></li>
            <li><a href="<?php echo base_url(); ?>contacto" class="<?php echo $contact; ?>">Contacto</a></li>
            <li><a href="<?php echo base_url(); ?>iniciar" class="<?php echo $login; ?>">Iniciar Sesion</a></li>
            <li><a href="<?php echo base_url(); ?>boletos" class="<?php echo $buy; ?>">Comprar Boletos</a></li>
          </ul>
        </nav>
      </div>
  </header>
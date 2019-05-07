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
          <li><a href="<?php echo base_url(); ?>Iniciar/logedin" >Incio</a></li>
            <li><a href="<?php echo base_url(); ?>Agent/voluntarios">Lista de Voluntarios</a></li>
            <li><a href="<?php echo base_url(); ?>Agent/business">Lista de Fundaciones</a></li>
            <li><a href="<?php echo base_url(); ?>Agent/event" class="selected">Eventos</a></li>
            <li><a href="<?php echo base_url(); ?>Agent/profile">Agente</a></li>
            <li><a href="<?php echo base_url(); ?>Iniciar/logout">Log out</a></li>
          </ul>
        </nav>
      </div>
  </header>
        <main>
           <section id="newevent-main">
                <div id="container">
                    <h1>REGISTRO DE EVENTO</h1>
                    <h3><span>EVENTOS</span> REGISTRO</h3>
                </div>
            </section>  
            <section id="contact-form">
                <div class="wrap-form">
                <h1>Estar en contacto</h1>
                <form name="update-event" action="<?php echo base_url(); ?>Agent/Updated" method="POST">  
                    <input type="hidden" name="id" value="<?php echo $event['id']; ?>">
                    <input type="hidden" name="link" value="<?php echo $event['link']; ?>">
                    <input type="hidden" name="description" value="<?php echo $event['description']; ?>">
                    <input type="hidden" name="id" value="<?php echo $event['id']; ?>">

                    <div class="halfleft-textbox align-left">
                        <div class="nombre">
                        <label for="nombre">Nombres</label>
                        <input type="text" id="nombre" name="nombre" value="<?php echo $event['eventname']; ?>" placeholder="Nombre del Evento" required>
                        </div>    
                        <div class="responsable">
                        <label for="responsable">Responsable</label>
                        <input type="text" id="responsable" name="responsable" value="<?php echo $event['agent']; ?>" placeholder="Nombre del Responsable" required>
                        </div>
                    </div>

                    <div class="upload-pic">
                        <table>
                            <tr>
                                <td><img src="/leaneventos/imagenes/imagensubir.png" alt=""></td>           
                            </tr>
                            <tr>
                                <td><button class="lean-btn">Seleccionar Logo</button></td>
                            </tr>   
                        </table>
                    </div>

                    <div class="same-block">
                        <label for="lugar">Lugar</label>
                        <input type="text" id="lugar" name="lugar" value="<?php echo $event['address']; ?>" placeholder="Direccion del Lugar del Eventos required" required>
                    </div>

                    <div class="individual-col profile-form">
                        <label for="fecha">Fecha</label>
                        <input type="date" id="fecha" name="fecha" value="<?php echo $event['date']; ?>" placeholder="00/00/0000" required>
                    </div>    
                    <div class="individual-col profile-form" id="middle-form">
                        <label for="hora">Hora</label>
                        <input type="text" id="hora" name="hora" value="<?php echo $event['hora']; ?>" placeholder="00.00">
                    </div>
                    <div class="individual-col profile-form" id="right-form">
                        <label for="boleto">Valor de Boleto</label>
                        <input type="text" id="boleto" name="boleto" value="<?php echo $event['price']; ?>" placeholder="$000.00">
                    </div>  

                    <input type="submit" class="yellow-btn" id="guardar" value="Guardar">       
                </form>
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


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
                    <a href="<?php echo base_url(); ?>Business"><img src="/leaneventos/imagenes/logo.png" alt="logo-img"/></a>
                    <h1 class="logo-txt">LEANEVENTOS</p>
                </div>
                <nav>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>Business" class="selected">Incio</a></li>
                        <li><a href="<?php echo base_url(); ?>Business/Profile">Fundacion</a></li>
                        <li><a href="<?php echo base_url(); ?>Iniciar/logout">Log out</a></li>      
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <section id="list-event">
                <div class="container">
                    <h1>Lista de Eventos</h1>
                    <table>
                        <tr>
                            <th>DETAILLES DEL EVENTOS</th>
                            <th>LUGAR</th>
                            <th>FECHA</th>
                            <th>HORA</th>
                            <th>ASISTENCIA</th>
                        </tr>
                        <?php                 
                            foreach($events as $event)
                            { 
                                $eventid = $event["id"];
                                $eventname = $event["eventname"];
                                $responsible = $event["agent"];
                                $address = $event["address"];
                                $time = $event["hora"];
                                $date = $event["date"];
                                $link = $event["link"];
                                ?>
                            <tr>
                                <td id="first-col">
                                    <img src="<?php echo $link; ?>" width="120px" height="140px">
                                    <span> <?php echo $eventname; ?> </span>
                                </td>
                                <td><?php echo $address; ?></td>
                                <td><?php echo $date; ?></td>
                                <td><?php echo $time; ?></td>
                                <td><button id="confirm-btn" class="yellow-btn">Confirma</button></td>
                            </tr>
                            <?php }
                            ?>          
                    </table>
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

<section id="registrate-form">
        <div class="modal-content" id="business-notification">
            <form>  
            <div class="modal-header">
                <h4>Bienvenido</h4>
            </div> 
            <div class="modal-body">
                <h4>Gracias por ser un Voluntario en nuestros evento.</h4>
            </div>  
            <div class="align-right">
                <div class="modal-footer">
                    <button class="close-btn">Close</button>
                </div> 
            </div>
        </form>
    </div>
</section>

<script>
    var modal = document.getElementById('registrate-form');
    var confirm = document.getElementById('confirm-btn');
    var confirm2 = document.getElementById('confirm-btn2');
    var confirm3 = document.getElementById('confirm-btn3');

    confirm.onclick = function() {
      modal.style.display = "block";
    }

    confirm2.onclick = function() {
      modal.style.display = "block";
    }
    
    confirm3.onclick = function() {
      modal.style.display = "block";
    }
    
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
</script>

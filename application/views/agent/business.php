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
                <li><a href="<?php echo base_url(); ?>Agent/business" class="selected">Lista de Fundaciones</a></li>
                <li><a href="<?php echo base_url(); ?>Agent/event">Eventos</a></li>
                <li><a href="<?php echo base_url(); ?>Agent/profile">Agente</a></li>
                <li><a href="<?php echo base_url(); ?>Iniciar/logout">Log out</a></li>
            </ul>
            </nav>
        </div>
    </header>
        <main>
            <section id="list-event">
                <div class="container">
                    <h1>Lista de Fundaciones</h1>
                    <table>
                        <tr>
                            <th>NOMBRE DE LA FUNDACION</th>
                            <th>EVENTO</th>
                            <th>RESPONSABLE</th>
                            <th>COMISION</th>
                            <th>CONFIRMA</th>
                        </tr>
                        <tr>
                            <td id="first-col">
                                <img src="/leaneventos/imagenes/nologo.png" width="120px" height="120px">
                                <span>Nombre del Evento y sus detalles</span>
                            </td>
                            <td>Nombre del Evento</td>
                            <td>Nombre del Responsable</td>
                            <td><input class="number-text" type="text" value="1"></td>
                            <td><button class="yellow-btn">Asignar</button></td>
                        </tr>
                        <tr>
                            <td id="first-col">
                                <img src="/leaneventos/imagenes/nologo.png" width="120px" height="120px">
                                <span>Nombre del Evento y sus detalles</span>
                            </td>
                            <td>Nombre del Evento</td>
                            <td>Nombre del Responsable</td>
                            <td><input class="number-text" type="text" value="1"></td>
                            <td><button class="yellow-btn">Asignar</button></td>
                        </tr>
                        <tr>
                            <td id="first-col">
                                <img src="/leaneventos/imagenes/nologo.png" width="120px" height="120px">
                                <span>Nombre del Evento y sus detalles</span>
                            </td>
                            <td>Nombre del Evento</td>
                            <td>Nombre del Responsable</td>
                            <td><input class="number-text" type="text" value="1"></td>
                            <td><button class="yellow-btn">Asignar</button></td>
                        </tr>
                    </table>
                </div>
                <div class="number-paging">
                    <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">&raquo;</a>
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
<html lang="en">
    <head>
        <title>Lean Eventos</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="./css/leanevent.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        <header>
            <div id="container">
                <div id="logo">
                    <a href="index.html"><img src="imagenes/logo.png" alt="logo-img"/></a>
                    <h1 class="logo-txt">LEANEVENTOS</p>
                </div>
                <nav>
                    <ul>
                        <?php
                        $id = $_GET["id"];
                        echo"<li><a href=\"home_agent.php?id=$id\" class=\"selected\">Incio</a></li>";

                        ?>
                        <li><a href="list_individual.html">Lista de Voluntarios</a></li>
                        <li><a href="list_business.html">Lista de Fundaciones</a></li>
                        <li><a href="list_event.php">Eventos</a></li>
                        <li><a href="profile_agent.html">Agente</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <section id="list-event">
                <div class="container">
                    <h1>Lista de Eventos</h1>
                    <div id="add-event">
                        <a href="new_event.html" class="close-btn button" id="add-event-btn">Agregar</a>
                    </div>
                    <table>
                        <tr>
                            <th>DETAILLES DEL EVENTOS</th>
                            <th>LUGAR</th>
                            <th>FECHA</th>
                            <th>MODIFICAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                        <?php
                            $server = "localhost:3306";
                            $username = "tungpvut_wp1";
                            $password = "Tung!402";
                            $db = "tungpvut_LEANEVENTO";
                            
                            $conn = new mysqli($server, $username, $password, $db);
                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }                    
                            $sql = "SELECT * FROM Evento";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {                     
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $eventid = $row["id"];
                                    $evenname = $row["firstname"];
                                    $responsible = $row["agent"];
                                    $address = $row["address"];
                                    $date = $row["date"];
                                    echo  "<tr>
                                    <td id=\"first-col\">
                                        <img src=\"./imagenes/nologo.png\" width=\"120px\" height=\"140px\">
                                        <span>$evenname</span>
                                    </td>
                                    <td>$address</td>
                                    <td>$date</td>
                                    <td><button id=\"#\" class=\"mod-btn\"><svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"far\" data-icon=\"edit\" class=\"svg-inline--fa fa-edit fa-w-18\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\"><path fill=\"currentColor\" d=\"M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z\"></path></svg></button></td>
                                    <td><button id=\"#\" class=\"red-btn\"><svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"trash-alt\" class=\"svg-inline--fa fa-trash-alt fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z\"></path></svg></button></td>
                                </tr>";
                                }
                            }
                            $conn->close();
                        ?>
                       
                    </table>
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

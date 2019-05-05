<html lang="en">
    <head>
        <title>Lean Eventos</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/leanevent.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        <header>
            <div id="container">
                <div id="logo">
                    <a href="index.html"><img src="imagenes/logo.png" alt="logo-img"/></a>
                    <h1 class="logo-txt">LEANEVENTOS</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html">Incio</a></li>
                        <li><a href="aboutus.html">Quienes Somos</a></li>
                        <li><a href="blog.html/">Blog</a></li>
                        <li><a href="registrate.html">Registrate</a></li>
                        <li><a href="contacto.html">Contacto</a></li>
                        <li><a href="iniciar.html">Iniciar Sesion</a></li>
                        <li><a href="boletos.php" class="selected">Comprar Boletos</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <section id="boletos-main">
                <div id="container">
                    <h1>COMPRAR BOLETOS</h1>
                    <h3><span>INCIO</span> COMPRAR BOLETOS</h3>
                </div>
            </section>
            <?php
                $server = "localhost:3306";
                $username = "tungpvut_wp1";
                $password = "Tung!402";
                $db = "tungpvut_LEANEVENTO";
                $id = $_GET["id"];

                $conn = new mysqli($server, $username, $password, $db);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }                    
                $sql = "SELECT * FROM Events WHERE id = $id";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {      
                    $row = $result->fetch_assoc();   
                    $description = $row["description"];
                    $eventName = $row["eventname"];
                    $link = $row["link"];
                    $price = $row["price"];            
                    echo "<section id=\"item-detail\">
                    <div id=\"container\">
                        <table>
                            <tr>
                                <td rowspan=\"6\">
                                    <p class=\"top-left\" id=\"red-p\"> Sale </p>
                                    <img src=\"$link\" id=\"item-pic\">
                                </td>
                                <td><h2>$eventName</h2>
                            </tr>
                            <tr>
                                <td>
                                    <h2>$price</h2>
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td colspan\"3\">
                                    $description
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Numero de Entradas
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"quantity buttons_added\">
                                        <input type=\"button\" value=\"-\" class=\"minus\">
                                        <input type=\"number\" step=\"1\" min=\"1\" max=\"\" name=\"quantity\" value=\"1\" title=\"Qty\" class=\"input-text qty text\" size=\"4\" pattern=\"\" inputmode=\"\">
                                        <input type=\"button\" value=\"+\" class=\"plus\">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button class=\"lean-btn\" id=\"comprar-btn\"><span><i class=\"fas fa-shopping-cart\"></span></i>Comprar</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </section>
                <section id=\"detail-bottom\">
                    <div id=\"tab-choice\">
                        <button class=\"lean-btn chosen\">DESCRIPCION</button>
                        <button class=\"lean-btn\">ENCARGADOS</button>
                        <button class=\"lean-btn\">PATROCINANTES</button>
                    </div>
                    <div id=\"item-description\">
                        <p>    $description
                        </p>
                    </div>
                </section>";
                }
                $conn->close();
            ?>
            <!-- <section id="item-detail">
                <div id="container">
                    <table>
                        <tr>
                            <td rowspan="6">
                                <p class="top-left" id="red-p"> Sale </p>
                                <img src="imagenes/minibaner4.jpg" id="item-pic">
                            </td>
                            <td><h2>NO PERDAMOS LA FE</h2>
                        </tr>
                        <tr>
                            <td>
                                <h2>$300.00</h2>
                            </td>
                            <td>
                                <div class="stars"> 
                                    <span class="star on"></span>
                                    <span class="star on"></span>
                                    <span class="star on"></span>
                                    <span class="star on"></span>
                                    <span class="star on"></span>
                                </div>   
                                (74 Rating)
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                ¡La fe no se puede perder JAMAS! Es imprescindible para todo en nuestras vidas,
                                poco a poco las cosas irán mejorando. No cambiaran de la noche a la mañana, 
                                pero van a cambiar y solo cambiarán si te lo propones. Si hoy tuvimos un mal día, nuestra meta será tener 
                                uno mejor mañana. Es básicamente hacer nuestra la frase
                                "Hoy no me daré por vencido", repítela todos los días, hazla parte de tu filosofía de vida.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Numero de Entradas
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus">
                                    <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                                    <input type="button" value="+" class="plus">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button class="lean-btn" id="comprar-btn"><span><i class="fas fa-shopping-cart"></span></i>Comprar</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </section>
            <section id="detail-bottom">
                <div id="tab-choice">
                    <button class="lean-btn chosen">DESCRIPCION</button>
                    <button class="lean-btn">ENCARGADOS</button>
                    <button class="lean-btn">PATROCINANTES</button>
                </div>
                <div id="item-description">
                    <p>    La fe no se puede perder JAMAS! Es imprescindible para todo en nuestras vidas,
                            poco a poco las cosas irán mejorando. No cambiaran de la noche a la mañana, 
                            pero van a cambiar y solo cambiarán si te lo propones. Si hoy tuvimos un mal día, nuestra meta será tener 
                            uno mejor mañana. Es básicamente hacer nuestra la frase La fe no se puede perder JAMAS! Es imprescindible para todo en nuestras vidas,
                            poco a poco las cosas irán mejorando. No cambiaran de la noche a la mañana, 
                            pero van a cambiar y solo cambiarán si te lo propones. Si hoy tuvimos un mal día, nuestra meta será tener 
                            uno mejor mañana. Es básicamente hacer nuestra la frase La fe no se puede perder JAMAS! Es imprescindible para todo en nuestras vidas,
                            poco a poco las cosas irán mejorando. No cambiaran de la noche a la mañana, 
                            pero van a cambiar y solo cambiarán si te lo propones. Si hoy tuvimos un mal día, nuestra meta será tener 
                            uno mejor mañana. Es básicamente hacer nuestra la frase
                    </p>
                </div>
            </section> -->
        </main>
    <footer>
        <p>
            Copyright &copy;2019 All rights reserved | This web is made with &#9825; by <span>DiazApps</span>
        </p>
    </footer>
    </body>
</html>
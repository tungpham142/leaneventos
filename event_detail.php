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
</main>
<main>
    <section id="boletos-main">
        <div id="container">
            <h1>COMPRAR BOLETOS</h1>
            <h3><span>INCIO</span> COMPRAR BOLETOS</h3>
        </div>
    </section>
    <?php
        $description = $event["description"];
        $eventName = $event["eventname"];
        $link = $event["link"];
        $price = $event["price"];            
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
            </div>
            <div id=\"item-description\">
                <p>    $description
                </p>
            </div>
        </section>";
        
    ?>
</main>
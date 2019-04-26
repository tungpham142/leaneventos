<?php
$validated = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $validated = true;
    $responsable = $_POST['responsable'];
    $nombre = $_POST['nombre'];
    $lugar = $_POST['lugar'];
    $fecha = $_POST['fecha'];

    if (empty($nombre))
    {
        echo("Name is required<br>");
        $validated = false;
    }
    else 
    {
        if (!preg_match("/^[a-zA-Z0-9 ]*$/",$nombre)) 
        {
            echo("In First name: Only letters and white space allowed<br>"); 
            $validated = false;
        }
    }

    if (empty($responsable))
    {
        echo("Last Name is required<br>");
        $validated = false;
    }
    else 
    {
        if (!preg_match("/^[a-zA-Z ]*$/",$responsable)) 
        {
            echo("Responsible name: Only letters and white space allowed<br>"); 
            $validated = false;
        }
    }

    if (empty($lugar))
    {
        echo("Email is required<br>");
        $validated = false;
    }

    if (empty($fecha))
    {
        echo("Password is required<br>");
        $validated = false;
    }

}

if($validated)
{
    echo "Validate Successful<BR>";
    $server = "localhost:3306";
    $username = "tungpvut_wp1";
    $password = "Tung!402";
    $db = "tungpvut_LEANEVENTO";

    $conn = new mysqli($server, $username, $password, $db);

    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 



    $sql = "Insert into Evento (FirstName, Agent, Address, Date) 
    values ('$nombre', '$responsable', '$lugar', '$fecha')";
    
    if ($conn->query($sql) === TRUE)
    {
        echo "Registration Completed";
        echo "<BR>";
        echo "<a href='list_event.php'>Back to main page</a>";
    } 
    else 
    {
        echo "Registration Failed";
        echo "<BR>";
        echo "<a href='list_event.php'>Back to main page</a>";
    }

    $conn->close();
}
else{
    echo "Validate Failed <BR>";
    echo "<a href='list_event.php'>Back to main page</a>";
}
?>

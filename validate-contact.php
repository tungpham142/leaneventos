<?php
$validated = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $validated = true;
    $correo = $_POST['correo'];
    $tema = $_POST['tema'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $message = $_POST['mensaje'];

    if (empty($nombre))
    {
        echo("First Name is required<br>");
        $validated = false;
    }
    else 
    {
        if (!preg_match("/^[a-zA-Z ]*$/",$nombre)) 
        {
            echo("In First name: Only letters and white space allowed<br>"); 
            $validated = false;
        }
    }

    if (empty($apellido))
    {
        echo("Last Name is required<br>");
        $validated = false;
    }
    else 
    {
        if (!preg_match("/^[a-zA-Z ]*$/",$apellido)) 
        {
            echo("In Last name: Only letters and white space allowed<br>"); 
            $validated = false;
        }
    }

    if (empty($correo))
    {
        echo("Email is required<br>");
        $validated = false;
    }
    else 
    {
        if (!preg_match("/^[a-zA-Z0-9._]+@[a-zA-Z]{2,5}\.[a-zA-Z]{2,5}$/",$correo)) 
        {
            echo("In Email: Only allow email with format: xxx@yyy.zzz<br>"); 
            $validated = false;
        }
    }

    if (empty($tema))
    {
        echo("Title is required<br>");
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

    $sql = "Insert into Messages (FirstName, LastName, Title, Email, Message) 
    values ('$nombre', '$apellido', '$tema', '$correo', '$message')";
    
    if ($conn->query($sql) === TRUE)
    {
        echo "Your message is sent";
        echo "<BR>";
        echo "<a href='index.html'>Back to main page</a>";
    } 
    else 
    {
        echo "Send Message Failed";
        echo "<BR>";
        echo $sql;
        echo "<BR>";
        echo "<a href='index.html'>Back to main page</a>";
    }
    $conn->close();
}
else{
    echo "Validate Failed <BR>";
}
?>

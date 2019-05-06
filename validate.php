<?php
$validated = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $validated = true;
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $apellido = $_POST['apellido'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $postal = $_POST['postal'];

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

    if (empty($contrasena))
    {
        echo("Password is required<br>");
        $validated = false;
    }
    else 
    {
        if (strlen($contrasena) < 8) 
        {
            echo("Password have to to at least 8 characters<br>"); 
            $validated = false;
        }
    }

}

if($validated)
{
    echo "Validate Successful<BR>";
    $server = "localhost:3306";
    $username = "root";
    $password = "";
    $db = "tungpvut_LEANEVENTO";

    $conn = new mysqli($server, $username, $password, $db);

    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 



    $sql = "Insert into Member (FirstName, LastName, Address, City, zip, Email, Password, Type) 
    values ('$nombre', '$apellido', '$direccion', '$ciudad', '$postal', '$correo', '$contrasena', 3)";
    
    if ($conn->query($sql) === TRUE)
    {
        echo "Registration Completed";
        echo "<BR>";
        echo "<a href='index.html'>Back to main page</a>";
    } 
    else 
    {
        echo "Registration Failed";
        echo "<BR>";
        echo "<a href='index.html'>Back to main page</a>";
    }

    $conn->close();
}
else{
    echo "Validate Failed <BR>";
    echo "<a href='index.html'>Back to main page</a>";
}
?>

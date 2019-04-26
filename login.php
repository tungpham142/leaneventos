<?php
$validated = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $validated = true;
    $correo = $_POST['username'];
    $contrasena = $_POST['password'];


    if (empty($correo))
    {
        echo("Email is required<br>");
        $validated = false;
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
    $username = "tungpvut_wp1";
    $password = "Tung!402";
    $db = "tungpvut_LEANEVENTO";

    $conn = new mysqli($server, $username, $password, $db);

    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "Select * From Member Where email = '$correo' And password = '$contrasena'";
    
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        session_start(); // Starting Session
        $row = $result->fetch_assoc();   
        $type = $row["member_type"];
        $id = $row["id"];
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            header("location: welcome.php");
            exit;
        }
        if($type == "agent"){
            echo "<script>window.location.href = \"./home_agent.php?id=$id\";</script>";
        }
        if($type == "business"){
            echo "<script>window.location.href = \"./home_business.php?id=$id\";</script>";
        }
        if($type == "individual"){
            echo "<script>window.location.href = \"./home_individual.php?id=$id\";</script>";
        } 
    }

    else{
        echo "Invalid email or password. <BR>";
        echo "<a href='index.html'>Back to main page</a>";
    }

    $conn->close();
}
else{
    echo "Invalid email or password. <BR>";
    echo "<a href='index.html'>Back to main page</a>";
}
?>

<?php
    session_start();

    require_once("conn/connection.php");

    // get the values from the form
    $name = $_GET["name"];
    $email = $_GET["email"];
    $password = $_GET["password"];
    $comfirmPassword = $_GET["confirm-password"];

    //encrypt password
    $password = md5($password);
    $comfirmPassword = md5($comfirmPassword);

    //inserting the data
    $query = "INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$password');";
    $result = mysqli_query($conn, $query);

    if(result) {
        $query = "SELECT * FROM usuarios WHERE email='$email'";
        $result = mysqli_query($conn, $query);
        //return a array with all values of current row
        $row = mysqli_fetch_row($result);
   
        $_SESSION["id"] = $row[0];
        $_SESSION["name"] = $row[1];
        setcookie("logged", "1", time()+60*60*24*365);
        $_COOKIE["logged"] = "1";
        header("location: index.php");
    }

?>

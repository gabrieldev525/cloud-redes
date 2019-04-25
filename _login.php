<?php
   session_start();

   require_once 'conn/connection.php';

   $email = isset($_POST['email']) ? $_POST['email'] : null;
   $password = isset($_POST['password']) ? $_POST['password'] : null;

   // $password = md5($password);

   //get the current user data
   $query = "SELECT * FROM users WHERE email='$email' AND password='$password';";
   $result = mysqli_query($conn, $query);
 
   if($result) {
      //verify if the user exists
      $rows_count = mysqli_num_rows($result);
      if($rows_count > 0) { //exists
         //return a array with all values of current row
         $row = mysqli_fetch_row($result);

         //the user data
         $_SESSION["id"] = $row[0];
         $_SESSION["name"] = $row[1];

         setcookie("logged", "1", time()+60*60*24*365);
         $_COOKIE["logged"] = "1";
         
         echo "logged sucesfully";

         header("location: index.php");
      }
   } else {
      //header("location: index.php");
      echo mysqli_error($conn);
   }
?>  
<?php
    include("login.html");
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "login_details";

    $connection = new mysqli($dbhost, $dbuser, $dbpass, $db);
    
    $username = $_POST['email'];
    $password = $_POST['password'];


    if(isset($_POST['login'])){
        $query = "SELECT 'password' FROM `login_details` WHERE username = '$username' AND user_password='$password'";

        $result = $connection->query($query);

        $count = mysqli_num_rows($result);

        if($count>0){
            session_start();
            $_SESSION['user'] = $username;
            header("Location: ./addEntry.php");
        }

        else{
            header("Location: ./login.html?errorWrongDetails");
        }
    }
    

    if(isset($_POST['register'])){
        $query = "INSERT INTO `login_details` (username, user_password) 
        values('$username', '$password')";

        $result = $connection->query($query);

        session_start();
        $_SESSION['user'] = $username;

        header("Location: ./addEntry.php");

       
    }

?>
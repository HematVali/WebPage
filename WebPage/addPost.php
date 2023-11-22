<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "login_details";
    require_once('./viewBlog.php');

    $go_blog = $_POST['go_blog'];
    if(isset($go_blog)){
        write_blog('ALL');
    }

    $connection = new mysqli($dbhost, $dbuser, $dbpass, $db);

    $title = $_POST['title'];
    $contend= $_POST['text'];

    date_default_timezone_set('Europe/London');
    $date_clicked = date('Y-m-d H:i:s');
    
    $query = "INSERT INTO post(title, post, time_posted) 
    VALUES ('$title', '$contend', '$date_clicked')";
    
    mysqli_query($connection , $query);


    write_blog('ALL');


?>

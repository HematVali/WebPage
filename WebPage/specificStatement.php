<?php
    include("./viewBlog.php");
    session_start();

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "login_details";
    $connection = new mysqli($dbhost, $dbuser, $dbpass, $db);

    $what_month = $_POST["months"];
    if(isset($what_month)){
        $month_instered = $_POST['months'];
        write_blog($month_instered);
    }

    $comment_add = $_POST["comment_button"];
    if(isset($comment_add)){
        $title1 = $_POST["title"];
        $date1 = $_POST["date"];
        $post1 = $_POST["comment"];

        $comment_query = "INSERT INTO comments_table (title, date_posted, comments)
        VALUES ('$title1', '$date1', '$post1')";

        mysqli_query($connection , $comment_query);
        
        write_blog('ALL');
    }

    $write_post = $_POST["write_post"];
    if(isset($write_post)){
        header("Location: ./addEntry.php");
    }

    $delete_comment = $_POST["delete_comment"];
    if(isset($delete_comment)){
        if(($_SESSION['user'] == 'hemat-vali@hotmail.com')){
            $title2 = $_POST["title"];
            $date2 = $_POST["date"];
            $post2 = $_POST["current_comment"];

            $delete_query = "DELETE FROM comments_table WHERE title='$title2' AND date_posted='$date2'";

            mysqli_query($connection , $delete_query);
        }
        write_blog('ALL');
    }
?>
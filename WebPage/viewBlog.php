<?php 

?><style><?php include './css/viewblog.css'; ?> </style><?php
//echo '<link rel="stylesheet" href="./css/viewblog.css">';
session_start();

function write_blog($month){
    
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "login_details";

    $connection = new mysqli($dbhost, $dbuser, $dbpass, $db);

    if($month === 'ALL'){
        $sql = "SELECT * From post";
    }
    else{
        $sql = "SELECT * From post WHERE MONTH(time_posted) = '$month'";
    }

    $result = mysqli_query($connection, $sql);

    $store_title = array();
    $store_contend= array();
    $store_date = array();

    while($rows=mysqli_fetch_assoc($result)) {
        $store_title[] = $rows['title'];
        $store_contend[] = $rows['post'];
        $store_date[] = $rows['time_posted'];
    }

    $num_elements = count($store_title);

    $sorted = true;
    while($sorted){
    $sorted = false;
        for($i=0; $i < $num_elements; $i++){
            $date1 = strtotime($store_date[$i]);
            $date2 = strtotime($store_date[$i + 1]);

            if ($date1 < $date2) {
                $temp = $store_date[$i];
                $store_date[$i] = $store_date[$i+1];
                $store_date[$i+1] = $temp;

                $temp = $store_contend[$i];
                $store_contend[$i] = $store_contend[$i+1];
                $store_contend[$i+1] = $temp;

                $temp = $store_title[$i];
                $store_title[$i] = $store_title[$i+1];
                $store_title[$i+1] = $temp;

                $sorted = true;
            }  
        }
    }
    echo "<div>";
    echo "<form class ='form1' action='./specificStatement.php' method='post' id='month_option'>";
    echo "        <h1>Choose which month to show</h1>";
    echo "        <br>";
    echo "        <select name='months'>";
    echo "          <option selected>ALL</option>";
    echo "          <option value='01'>January</option>";
    echo "          <option value='02'>February</option>";
    echo "          <option value='03'>March</option>";
    echo "          <option value='04'>April</option>";
    echo "          <option value='05'>May</option>";
    echo "          <option value='06'>June</option>";
    echo "          <option value='07'>July</option>";
    echo "          <option value='08'>August</option>";
    echo "          <option value='09'>September</option>";
    echo "          <option value='10'>October</option>";
    echo "          <option value='11'>November</option>";
    echo "          <option value='12'>December</option>";
    echo "        </select>";
    echo "        <br>";
    echo "      <input class='button2' type='submit' name='month' id='month'>";
    echo "        <br>";
    echo "</form>";
    echo "<form class ='form1' action='./specificStatement.php' method='post'>";
    echo "      <input class='button2' type='submit' name='write_post' value='write post' id='write_post'>";
    echo "</form>";
    echo"</div>";

    $units = mysqli_fetch_assoc($result);

    echo '<body>';

        for($j = 0; $j < sizeof($store_title); $j++){

        echo '<section class="post">';
        echo '<header>' . $store_date[$j] . '</header>';
        echo "<hr>";
        echo '<h1>' . $store_title[$j] . '</h1><br>';
        echo '<p1 class="p1">' . $store_contend[$j] . '</p1><br>';
        echo '<form action ="./specificStatement.php" method="POST">';

        $title1 = $store_title[$j];
        $date1 = $store_date[$j];

        echo "<input type='hidden' name='title' value='$title1'>";
        echo "<input type='hidden' name='date' value='$date1'>";

        $comments_query = "SELECT comments FROM comments_table where title='$store_title[$j]'";
        $comment_result = mysqli_query($connection, $comments_query);

        if(mysqli_num_rows($comment_result) > 0) {
            while($comments_row = mysqli_fetch_assoc($comment_result)) {
                echo $comments_row['comments'];
                echo "<br>";
                echo '<form action ="./specificStatement.php" method="POST">';
                $current_comment = $store_contend[$j];
                echo "<input type='hidden' name='current_comment' value='$current_comment'>";
                if ($_SESSION['user'] = 'hemat-vali@hotmail.com'){
                    echo '<input class ="button" type="submit" class = "submit" name="delete_comment" id="delete_comment" value="delete comment">';
                }
                echo '</form>';
            }
        }
        echo '<textarea name="comment" methodid="comment" value="comment"></textarea>';
        echo '<input class ="button" type="submit" class="submit" name="comment_button" id="comment_button" value="add comment">';
        echo '</form>';
        echo '</section>';
    }

    echo'</body>';


}

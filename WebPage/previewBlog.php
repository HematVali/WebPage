<?php 
require_once("./addPost.php");

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "login_details";

$connection = new mysqli($dbhost, $dbuser, $dbpass, $db);

$sql = "SELECT * From post";

$result = mysqli_query($connection, $sql);

$store_title = array();
$store_contend= array();
$store_date = array();

while($rows=mysqli_fetch_assoc($result)) {
    $store_title[] = $rows['title'];
    $store_contend[] = $rows['contend'];
    $store_date[] = $rows['time_posted'];
    echo "<br>";
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
            $store_title[$i+1] = $store_title;

            $sorted = true;
        }  
    }
}

for($i=0; $i < $num_elements ;$i++){
    echo $store_title[$i];  
    echo $store_contend[$i];  
    echo $store_date[$i];  
    echo "<br>";
}
?>

<html>
    <h1>Do you which to proceed</h1>
    <form>
        <input class='button' onlick="yes()" type='submit' value='yes' name = 'yes'>
        <input class='button' onlick="delete()" type='submit' value='no' name = 'no'>
    </form>
</html>


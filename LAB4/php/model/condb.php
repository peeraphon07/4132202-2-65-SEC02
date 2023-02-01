<?php
$host = "db"; // db service from dockker-compose up
$user = "root";
$pass = "1234";
$db = "db_student";
try{
    $link = mysqli_connect($host,$user,$pass,$db);
    mysqli_query($link,"SET NAME utf8");
} catch (Exception $e){
    echo "an eror";

}
?>
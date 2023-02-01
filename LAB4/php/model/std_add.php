<?php
$id = $_GET['std_id'];
$id = $_GET['std_name'];
$id = $_GET['std_sname'];

require "condb.php";

try {
    $sql = "INSERT INTO td_student 
    VALUES('$stu_id','$std_name','$std_sname')";
    mysqli_query($link,$sql);
    echo "Delete successful !!";
}catch(Exception $e){
    echo $e . "error no :" . mysqli_errno($link);
}
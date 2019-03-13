<?php
/**
 * Created by PhpStorm.
 * User: micronet
 * Date: 3/13/19
 * Time: 6:31 PM
 */

$connection =  mysqli_connect("localhost",
    'root','root','innovate_db');
if($connection){
    $sql = "SELECT * FROM students";
    $result = mysqli_query($connection,$sql);
    if($result){
        $students = [];
        while($row = mysqli_fetch_array($result)){
            array_push($students,$row);
        }
        echo json_encode($students);
    }
}
?>
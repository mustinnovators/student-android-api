<?php
$connection = mysqli_connect("localhost",'root','root',"innovate_db");
if(isset($_POST)){
    extract($_POST);

    $sql = "INSERT INTO  students(FullName,Email,Phone,Status)
            values('$fullname','$email','$phone',$status)";
    echo $sql;
    $result = mysqli_query($connection,$sql);
    if(!$result){
        echo "An error occurred: ".mysqli_error($connection);
    }else{
        echo "Information saved successfully!";
    }
}else{
    echo "You have not provided any values";

}
<?php
$connection = mysqli_connect("localhost",'root','root',"innovate_db");
if(isset($_POST)){
	//echo json_encode(['message'=> "".json_encode($_POST)]);
    extract($_POST);

    $sql = "INSERT INTO  students(FullName,Email,Phone,Status)
            values('$fullname','$email','$phone',$status)";
    //echo $sql;
    $result = mysqli_query($connection,$sql);
    if(!$result){
        echo json_encode(['message'
		=>"An error occurred: ".mysqli_error($connection)]);
    }else{
        //echo "Information saved successfully!";
	echo json_encode(['message'=> "Successfully saved"]);
    }

}else{
    //echo "You have not provided any values";
	echo json_encode(['message'=> "you cant save emppty values"]);
}

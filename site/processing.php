<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
//processing form

$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_gender = $_POST['user_gender'];
$user_age = $_POST['user_age'];
$user_message = $_POST['user_message'];

    if(!empty($user_name) && !empty($user_email) && !empty($user_gender) && !empty($user_age) && !empty( $user_message)){
        include('connection.php');
        
        mysqli_query($dbc, "INSERT INTO form(user_name, user_email, user_gender, user_age, user_message) VALUES('$user_name', '$user_email'; '$user_gender', '$user_age', '$user_message') ");

        $registered = mysqli_affected_rows($dbc);

        echo $registered." row is affected, everything works fine!"; 
    }else{
        echo "Please fill all values of the form";  
    }
}else{
    echo "No form has been submitted";
}

?>
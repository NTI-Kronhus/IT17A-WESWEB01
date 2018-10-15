<?php

if(
    isset($_GET['name']) &&
    isset($_GET['date']) &&
    isset($_GET['mail']) &&
    isset($_GET['phone']) &&
    isset($_GET['gender']) &&
    isset($_GET['pass'])  
  ){
    
    
$dbc_form = mysqli_connect("localhost","root","","form");

    
$name = $_GET['name'];
$date = $_GET['date'];
$mail = $_GET['mail'];
$phone = $_GET['phone'];
$gender = $_GET['gender'];
$pass = $_GET['pass'];
    
$query = "INSERT INTO register (name,date,mail,phone,gender,password) VALUES ('$name','$date','$mail','$phone','$gender','$pass');";

mysqli_query($dbc_form,$query);

// echo mysqli_error($dbc_form);
}
else{
    echo "NÅGOT GICK FEL. FÖRSÖK IGEN";
}

?>
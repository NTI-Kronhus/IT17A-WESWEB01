<?php

// ALLTID STARTA SESSION I BÖRJAN
session_start();

// KOLLA OM MAN VILL REGISTRERA SIG
if( isset($_POST['name']) && isset($_POST['date']) && isset($_POST['mail']) &&
    isset($_POST['address']) && isset($_POST['gender']) && isset($_POST['pass'])){
    
    // CONNECTA TILL DATABASEN
    $dbc_form = mysqli_connect("localhost","root","","form");

    // HÄMTA DATA FROM POST
    $name = $_POST['name'];
    $date = $_POST['date'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $pass = $_POST['pass'];

    // FORMULERA INSERT FRÅGA
    $query = "INSERT INTO register (name,date,mail,address,gender,password) VALUES ('$name','$date','$mail','$address','$gender','$pass');";

    // OM FRÅGAN GÅTT BRA
    if(mysqli_query($dbc_form,$query)){
        // SKICKAS TILL INDEX
        header("Location: index.php");
    }else{ // NÅGOT GICK FEL
        // SKAPA ETT ERRORMEDDELADNE
        $_SESSION['error_msg'] = "Upptagen mail!";
        header("Location: index.php");
    }

}
else{ // FELAKTIG DATA FRÅN $_POST
    $_SESSION['error_msg'] = "Felaktig information";
    header("Location: index.php");
}

?>
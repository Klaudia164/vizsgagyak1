<?php

require_once "includes/db.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
if(empty(trim($_POST["name"]))){
    $nev_err = "Kérlek írj be egy nevet!."; 
} else{
    $nev = trim($_POST["name"]);
}

if(empty(trim($_POST["email"]))){
    $email_err = "Kérlek írj be egy email címet!."; 
} else{
    $email = trim($_POST["email"]);
}

if(empty(trim($_POST["date"]))){
    $szuletes_err = "Kérlek írj be egy dátumot!."; 
} else{
    $szuletes = trim($_POST["date"]);
}

if(empty(trim($_POST["chekbox"]))){
    $nem_err = "Kérlek válasszon egy nemet!."; 
}
if(empty($nev_err) && empty($email_err) && empty($szuletes_err) && empty($nem_err)){
    

    $sql = "INSERT INTO jelentkezok (nev, email, szuletes, nem) VALUES (?, ?, ?, ?)";
     
    if($stmt = mysqli_prepare($conn, $sql)){

        $param_nev = $nev;
        $param_email = $email;
        $param_suletes = $szuletes;
        $param_nem = $nem;

        if(mysqli_stmt_execute($stmt)){

           header("location: index.php?page=index");
        } else{
            echo "Hiba.";
        }


        mysqli_stmt_close($stmt);
    }
}


mysqli_close($conn);
}
include 'view/page.php'
?>

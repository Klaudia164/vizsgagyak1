<?php

require_once "includes/db.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
if(empty(trim($_POST["name"]))){
    $username_err = "Kérlek írj be egy nevet!."; 
} else{
    $username = trim($_POST["name"]);
}

if(empty(trim($_POST["email"]))){
    $email_err = "Kérlek írj be egy email címet!."; 
} else{
    $email = trim($_POST["email"]);
}

if(empty(trim($_POST["date"]))){
    $date_err = "Kérlek írj be egy dátumot!."; 
} else{
    $date = trim($_POST["date"]);
}

if(empty($username_err) && empty($password_err) && empty($date_err)){
    

    $sql = "INSERT INTO jelentkezok (nev, email, szuletes, nem) VALUES (?, ?, ?, ?)";
     
    if($stmt = mysqli_prepare($conn, $sql)){

        $param_username = $username;
        $param_password = md5($password); 

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

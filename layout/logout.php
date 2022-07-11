<?php
    session_start();
    if(isset($_SESSION['ClaveUsuario'])){
        include_once "config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['ClaveUsuario']);
        if(isset($logout_id)){
                session_unset();
                session_destroy();
                header("location: ../public/login.php");
        }else{
            header("location: ../public/index.php");
        }
    }else{  
        header("location: ../public/login.php");
    }
?>
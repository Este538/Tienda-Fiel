<?php
    session_start();
    if(isset($_SESSION['ClaveUsuario'])){
        include_once "config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['ClaveUsuario']);
        if(isset($logout_id)){
                session_unset();
                session_destroy();
                header("location: http://localhost/projectC/index.php?p=inicio");
        }else{
            header("location: http://localhost/projectC/index.php?p=inicio");
        }
    }else{  
        header("location: http://localhost/projectC/index.php?p=inicio");
    }
?>
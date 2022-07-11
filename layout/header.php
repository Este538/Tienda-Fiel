<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5edc3a915f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.css">
    <link rel="stylesheet" href="./style/print.css">
    <link rel="stylesheet" href="./style/headerFooter.css">
    <link rel="stylesheet" href="./style/style.css"> 
    <link rel="stylesheet" href="./style/standard.css"> 
    <link rel="stylesheet" href="./style/contacto.css">
    <link rel="stylesheet" href="./style/login.css">
    
    <style>
    .container-tabla{padding: 20px;}
    .cart-link{width: 100%;text-align: right;display: block;font-size: 22px;}
    </style>
    <!--Ultimo commit unificado--> 
</head>
<body>
    <div id="top-header">
        <div class="container-th">
            <div class="contact-info">
                <span class="info-tel"><i class="fa-solid fa-phone"></i>(999) 396 82 50</span>
                <a href="mailto:dilian0217@gmail.com">
                    <span class="info-mail"><i class="fa-solid fa-envelope"></i>distribuidora@empresa.com</span>
                </a>
            </div>
        </div>
    </div>
    <header id="header">
        
                <div class="logo-container">
                        <a class="logo " href="?p=inicio" ><img src="./images/logo.png" alt="logo" width="367px" height="118px" class="logo"></a>
                </div>
                <div class="container-nav">
                    <span class="span-help"></span>
                    <div class="nav">
                        <nav>
                            <ul class="nav-menu" id="nav-menu">
                                <li class="nav-menu-item"><a  href="?p=inicio" class="nav-menu-link"><i class="fa-solid fa-lemon"></i>Inicio</a></li>
                                <?php if(!isset($_SESSION['ClaveUsuario'])){?>
                                        <li class="nav-menu-item"><a  href="?p=index" class="nav-menu-link"><i class="fa-solid fa-lemon"></i>Catálogo</a></li>
                                <?php }?>
                                
                                <li class="nav-menu-item"><a href="?p=contacto" class="nav-menu-link"><i class="fa-solid fa-lemon"></i>Contacto</a></li>
                                
                            </ul>
                        </nav>
                    </div>
                    <div class="carrito">
                            <?php 
                                session_start();
                                include_once "config.php";
                                if(!isset($_SESSION['ClaveUsuario'])){
                                ?>
                                <button id="registro" class="registro">
                                    <a href="?p=singup"> <h3 class="registro-txt">Sing up/log in</h3></a>
                                </button>
                                <?php }else{
                                    $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE ClaveUsuario = {$_SESSION['ClaveUsuario']}");
                                    if(mysqli_num_rows($sql) > 0){
                                    $row = mysqli_fetch_assoc($sql);
                                    } ?>
                                    <div class="content-user">
                                        <img src="./layout/images/<?php echo $row['img']; ?>" alt="">
                                        <div class="details">
                                            <span><?php echo $row['Nombre']. " " . $row['Apellido'] ?></span>
                                        </div>
                                    </div>    
                                    <button id="registro" class="registro">
                                    <a href="./layout/logout.php?logout_id=<?php echo $row['ClaveUsuario']; ?>" class="logout">Cerrar Sesión</a>
                                    </button>
                                    <?php
                                }
                            ?>
                    </div>
                </div>
                <div class="bars">
                    <button class="btn-bars">
                        <i class="fa-solid fa-bars"></i>
                    </button>

                </div>
    </header>
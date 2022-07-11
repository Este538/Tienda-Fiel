<?php 
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($password);
            $enc_pass = $row['Contrasena'];
            if($user_pass === $enc_pass){
                    $_SESSION['ClaveUsuario'] = $row['ClaveUsuario'];
                    echo "success";
            }else{
                echo "El correo o contraseña es incorrecto ";
            }
        }else{
            echo "$email - Este corre no existe";
        }
    }else{
        echo "Todos los datos son requeridos";
    }
?>
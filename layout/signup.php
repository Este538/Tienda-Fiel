<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - Este correo ya existe";
            }else{
                if(isset($_FILES['image'])){
                    $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);
    
                    $extensions = ["jpeg", "png", "jpg"];
                    if(in_array($img_ext, $extensions) === true){
                        $types = ["image/jpeg", "image/jpg", "image/png"];
                        if(in_array($img_type, $types) === true){
                            $time = time();
                            $new_img_name = $time.$img_name;
                            if(move_uploaded_file($tmp_name,"images/".$new_img_name)){
                                $ran_id = rand(time(), 100000000);
                                $encrypt_pass = md5($password);
                                $insert_query = mysqli_query($conn, "INSERT INTO usuarios (ClaveUsuario, Nombre, Apellido, Correo, Contrasena, img)
                                VALUES ({$ran_id}, '{$fname}','{$lname}', '{$email}', '{$encrypt_pass}', '{$new_img_name}')");
                                if($insert_query){
                                    $select_sql2 = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo = '{$email}'");
                                    if(mysqli_num_rows($select_sql2) > 0){
                                        $result = mysqli_fetch_assoc($select_sql2);
                                        $_SESSION['ClaveUsuario'] = $result['ClaveUsuario'];
                                        echo "success";
                                    }else{
                                        echo "Este correo electronico no existe";
                                    }
                                }else{
                                    echo "Algo salió mal. Please try again!";
                                }
                            }
                        }else{
                            echo "Porfavor ingresa un archivo - jpeg, png, jpg";
                        }
                    }else{
                        echo "Porfavor ingresa un archivo - jpeg, png, jpg";
                    }
                }
            }
        }else{
            echo "$email no es un correo valido";
        }
    }else{
        echo "Todos los datos son requeridos";
    }
?>
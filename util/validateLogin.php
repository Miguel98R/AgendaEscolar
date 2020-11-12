<?php
    
    include("conexion.php");
    session_start();

    $user = $_POST['user'];
    $psw = $_POST['psw'];

    $consulta = "SELECT * FROM usuarios WHERE  contrasena='$psw' and usuario='$user' ;";

    $result=mysqli_query($conn,$consulta);

    $filas=mysqli_num_rows($result);

    $datos=$result->fetch_assoc();

    if($filas>0){

            $_SESSION['password'] = $psw;
            $_SESSION['us'] = $user;
            header("location: ../dashboard.php");
         }else{ 
             
            $_SESSION["mensaje"] = "Contraseña y/o usuario incorrecto";
            $_SESSION["colorMensaje"] = "danger";
            header("location: ../index.php");
        }

mysqli_free_result($result);
mysqli_close($conn);


?>
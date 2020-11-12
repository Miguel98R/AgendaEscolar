<?php 

include "conexion.php";
session_start();


$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$nacimiento = $_POST['nacimiento'];


$grado = $_POST['grado'];
$grupo = $_POST['grupo'];
$escolaridad = $_POST['esolaridad'];

$imagenAlumno = $_FILES['fotoAlumno']['name'];
$ruta = $_FILES['fotoAlumno']['tmp_name'];
$destino=  "../img/FotosAlumnos/".$imagenAlumno ;
copy($ruta, $destino);

//INSERTAMOS EL NUEVO ALUMNO EN LA BD
$SQLnuevoAlumno = "INSERT INTO alumnos(nombre_alumno,paterno_alumno,materno_alumno,nacimiento_alumno,fotografia_alumno,escolaridad,grado,grupo) 
                   VALUES('$nombre','$paterno','$materno','$nacimiento','$destino','$escolaridad','$grado','$grupo');";

$insertarAlumno = $conn->query($SQLnuevoAlumno) or die(mysqli_error($conn));


//CONSULTAMOS EL ID DEL ALUMNO QUE SE ACABA DE INSERTAR
$SQLconsultarAlumnoCreado ="SELECT MAX(id) AS id FROM alumnos";
$idNuevo = $conn->query($SQLconsultarAlumnoCreado) or die(mysqli_error($conn));
$datoid=$idNuevo->fetch_assoc();
$idAlumno = $datoid['id'];

//----------
$nombrePadre = $_POST['nombreTutorPaterno'];
$apellidoPadre = $_POST['paternoTutor'];
$imagenTutorPaterno = $_FILES['fotoTutorPaterno']['name'];
$ruta = $_FILES['fotoTutorPaterno']['tmp_name'];
$destino=  "../img/FotosTutores/".$imagenTutorPaterno ;
copy($ruta, $destino);

//INSERTAMOS EL TUTOR PATERNO DEL NUEVO ALUMNO EN LA BD
$SQLTutor = "INSERT INTO tutores(nombre_tutor,apellido_tutor,fotografia_tutor,id_alumno)VALUES('$nombrePadre','$apellidoPadre','$destino','$idAlumno');";

$insertarTutor = $conn->query($SQLTutor) or die(mysqli_error($conn));

$nombreMadre = $_POST['nombreTutorMaterno'];
$apellidoMadre= $_POST['maternoTutor'];
$imagenTutorMaterno = $_FILES['fotoTutorMaterno']['name'];
$ruta = $_FILES['fotoTutorMaterno']['tmp_name'];
$destino=  "../img/FotosTutores/".$imagenTutorMaterno ;
copy($ruta, $destino);

//INSERTAMOS EL TUTOR MATERNO DEL NUEVO ALUMNO EN LA BD
$SQLTutor = "INSERT INTO tutores(nombre_tutor,apellido_tutor,fotografia_tutor,id_alumno)VALUES('$nombreMadre','$apellidoMadre','$destino','$idAlumno');";

$insertarTutor = $conn->query($SQLTutor) or die(mysqli_error($conn));



if($insertarTutor === true && $insertarAlumno===true){
   
    $_SESSION["mensaje"] = "Alumno registrado con exito";
    $_SESSION["colorMensaje"] = "success";
    header("location: ../dashboard.php");

}else{
    $_SESSION["mensaje"] = "Error al crear alumno, vuelva a intentar";
    $_SESSION["colorMensaje"] = "danger";
    header("location: ../dashboard.php");

}









?>
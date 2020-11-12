function validarLogin(){
    let psw;  
    let user;
   //validacion al no ingresar caracter en el input de contraseña
    psw = document.getElementById("psw").value;
    user = document.getElementById("user").value;

      
     if(user==="" || user===false || user===undefined ){
       Swal.fire({icon: 'warning',title:"Ingresa tu usuario"});
        return false;
     } 

     if(psw==="" || psw===false || psw===undefined ){
       Swal.fire({icon: 'warning',title:"Ingresa tu contraseña"});
        return false;
     }   
   
}

function validarCrear(){
    let nombre;  
    let paterno; //apellido paterno del alumno
    let materno; //apellido materno del alumno
    let nacimiento;
    let fotoAlumno;
    let grado;
    let grupo;
    let escolaridad;
    let nombreTutorPaterno;
    let paternoTutor;
    let fotoTutorPaterno;
    let nombreTutorMaterno;
    let maternoTutor;
    let fotoTutorMaterno;

    
    nombre = document.getElementById("nombre").value;
    paterno = document.getElementById("paterno").value;
    materno = document.getElementById("materno").value;
    nacimiento = document.getElementById("nacimiento").value;
    fotoAlumno = document.getElementById("fotoAlumno").value;
    grado = document.getElementById("grado").value;
    grupo = document.getElementById("grupo").value;
    escolaridad = document.getElementById("escolaridad").value;
    nombreTutorPaterno = document.getElementById("nombreTutorPaterno").value;
    paternoTutor = document.getElementById("paternoTutor").value;
    fotoTutorPaterno = document.getElementById("fotoTutorPaterno").value;
    nombreTutorMaterno = document.getElementById("nombreTutorMaterno").value;
    maternoTutor = document.getElementById("maternoTutor").value;
     fotoTutorMaterno = document.getElementById("fotoTutorMaterno").value;
   

      
     if(nombre==="" || nombre===false || nombre===undefined ){
       Swal.fire({icon: 'warning',title:"Ingresa el nombre del alumno"});
        return false;
     } 

     if(paterno==="" || paterno===false || paterno===undefined ){
       Swal.fire({icon: 'warning',title:"Ingresa el apellido paterno del alumno"});
        return false;
     } 
     
     if(materno==="" || materno===false || materno===undefined ){
       Swal.fire({icon: 'warning',title:"Ingresa el apellido materno del alumno"});
        return false;
     } 
     
     if(nacimiento==="" || nacimiento===false || nacimiento===undefined ){
       Swal.fire({icon: 'warning',title:"Ingresa la fecha de nacimiento del alumno"});
        return false;
     }

     if(fotoAlumno==="" || fotoAlumno===false || fotoAlumno===undefined ){
       Swal.fire({icon: 'warning',title:"Ingresa la fotografía del alumno"});
        return false;
     }

     if(escolaridad==="" || escolaridad===false || escolaridad===undefined || escolaridad==="Selecciona el nivel educativo:"){
       Swal.fire({icon: 'warning',title:"Selecciona el nivel educativo"});
        return false;
     }
   

     if(grado==="" || grado===false || grado===undefined ){
       Swal.fire({icon: 'warning',title:"Ingresa el grado"});
        return false;
     }

      if(grupo==="" || grupo===false || grupo===undefined ){
       Swal.fire({icon: 'warning',title:"Ingresa el grupo"});
        return false;
     }
   
     if(nombreTutorPaterno==="" || nombreTutorPaterno===false || nombreTutorPaterno===undefined ){
       Swal.fire({icon: 'warning',title:"Ingresa el nombre del padre"});
        return false;
     }

     if(paternoTutor==="" || paternoTutor===false || paternoTutor===undefined ){
       Swal.fire({icon: 'warning',title:"Ingresa el apellido de el padre del alumno"});
        return false;
     }

      if(fotoTutorPaterno==="" || fotoTutorPaterno===false || fotoTutorPaterno===undefined ){
       Swal.fire({icon: 'warning',title:"Ingresa la foto de el padre"});
        return false;
     }

     if(nombreTutorMaterno==="" || nombreTutorMaterno===false || nombreTutorMaterno===undefined ){
       Swal.fire({icon: 'warning',title:"Ingresa el nombre de la madre del alumno"});
        return false;
     }

     if(maternoTutor==="" || maternoTutor===false || maternoTutor===undefined ){
       Swal.fire({icon: 'warning',title:"Ingresa el apellido de la madre del alumno"});
        return false;
     }

      if(fotoTutorMaterno==="" || fotoTutorMaterno===false || fotoTutorMaterno===undefined ){
       Swal.fire({icon: 'warning',title:"Ingresa la foto de la madre del alumno"});
        return false;
     }
   

}

 $(document).ready(function() {
    // show the alert
    setTimeout(function() {
        $(".alert").alert('close');
    }, 2000);
});


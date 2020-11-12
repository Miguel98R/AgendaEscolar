<?php

session_start();
$psw = $_SESSION['password'];

if (!isset($psw)) {

  header("location: index.php");
}
  ?> 
 <?php include ("components/head.php"); ?>
 
 <?php include ("components/navBar.php"); ?>
 

      <div class="container-fluid py-4 ">
          <?php
              if(!isset($_SESSION["mensaje"])){
                $mensaje = "";
                $colorMensaje = "";
              }else{
                $mensaje =$_SESSION["mensaje"];
                $colorMensaje =$_SESSION["colorMensaje"];
            ?>
             <div class="alert alert-<?php echo $colorMensaje ?> alert-dismissible fade show  " role="alert">
               <strong><?php echo $mensaje ?></strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                 </button>
              </div>
              
            <?php  
                  session_destroy();
               }
              ?>
  <div class="row">
    <div class="col-md-2 mb-3">
        <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
        <div class="rounded py-4 " >
                <img src="./img/logo.png" class="img-fluid rounded-circle mx-auto d-block " width="150" height="150" style="-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
border:solid 1px black;"> 
            </div>
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-bars"></i>&nbsp;Menu principal</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " id="inventario-tab" data-toggle="tab" href="#inventario" role="tab" aria-controls="inventario" aria-selected="true"><i class="fas fa-boxes"></i>&nbsp;Inventario</a>
  </li>
  
</ul>

    </div>
    <!-- /.col-md-4 -->
        <div class="col-md-10">

        <div class="row">
        <div class="col-md-1">
          <hr style="border:none;border-left:1px solid hsla(200, 10%, 50%,100);height:72vh;width:1px;">
        </div>
        <div class="col-md-11">
           <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home-tab">
               
                 <h3 class="py-4 h1"><i class="fas fa-bars"></i>&nbsp;Menu princpial</h3>
                 <hr>
                 <div class="row py-4">
                  <div class="col-md-4">
                    <button type="button" class="btn btn-success "data-toggle="modal" data-target="#modalNuevoAlumno"><i class="fas fa-plus"></i>&nbsp;Crear nuevo alumno</button>
                  </div>
                  <div class="col-md-4">
                    <button type="button" class="btn btn-primary"data-toggle="modal" data-target="#modalConsultar"><i class="fas fa-search-plus"></i>&nbsp;Consultar</button>
                  </div>
                  <div class="col-md-4">
                    <button type="button" class="btn btn-warning"data-toggle="modal" data-target="#modalEditar"><i class="fas fa-edit"></i>&nbsp;Modificar/Eliminar</button>
                  </div>
                 </div>
               

              </div>
               <div class="tab-pane fade show " id="inventario" role="tabpanel" aria-labelledby="inventario-tab">
                 <h3 class="py-4 h1"><i class="fas fa-boxes"></i>&nbsp;Inventario</h3>
                  <hr>

              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- /.col-md-8 -->
  </div>
  
  
  
</div>
<!-- /.container -->

<!-- modales -->
<!-- MODAL CREAR NUEVO -->
<div class="modal fade bd-example-modal-xl" id="modalNuevoAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <form action="util/nuevoAlumno.php" method="post" autocomplete="off" enctype="multipart/form-data" onsubmit="return validarCrear();" >
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"><i class="fas fa-user"></i>&nbsp;Crear nuevo</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
          <p class="h5" style="margin: 0;padding: 0;" ><i class="fas fa-user"></i>&nbsp;Datos personales:</p>
        <div>
      
          <!-- DATOS PERSONALES -->
        <div class="row">
          <div class="col-md-4">
            <div class="md-form">
             
          <input type="text" name="nombre" id="nombre"  class="form-control" onkeyup="this.value = this.value.toUpperCase();">
          <label for="nombre"> Nombre</label>
        </div>
          </div>
          <div class="col-md-4">
            <div class="md-form">
          <input type="text" name="paterno" id="paterno"  class="form-control" onkeyup="this.value = this.value.toUpperCase();">
          <label for="nombre">Apellido paterno</label>
        </div>
          </div> 
          <div class="col-md-4">
             <div class="md-form">
          <input type="text" name="materno" id="materno"  class="form-control" onkeyup="this.value = this.value.toUpperCase();">
          <label for="nombre">Apellido materno</label>
        </div>
          </div>
        </div>
         <div class="row">
          
          <div class="col-md-6" >
             <div class="md-form md-outline input-with-post-icon datepicker" style="margin: 0;padding: 0;">
          <input placeholder="seleccionar fecha" type="date" id="nacimiento" name="nacimiento" class="form-control" >
          <label for="example">Fecha de nacimiento</label>
        </div>
          </div> 
          <div class="col-md-6">
             <!-- FOTOGRAFIA ALUMNO -->
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="fotoAlumno" name="fotoAlumno" 
              aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="fotoAlumno">Fotografía del alumno</label>
            </div> 
          </div>
      <!-- FOTOGRAFIA ALUMNO -->

          </div>
        </div>
        
       <!-- DATOS PERSONALES -->
     </div>
     <br>

      <div class="py-4">
      <!-- DATOS ESCOLARES -->
      <p class="h5" style="margin: 0;padding: 0;"><i class="fas fa-school"></i>&nbsp;Datos escolares:</p>
      <div class="row  ">
        <div class="col-md-4 " style="margin: 0;padding:33px;">
          <select name="esolaridad" id="escolaridad" class="custom-select custom-select-sm "onkeyup="this.value = this.value.toUpperCase();" >
                <option >Selecciona el nivel educativo:</option>
                <option value="Preescolar">Preescolar</option>
                <option value="Primaria">Primaria</option>
                <option value="Secundaria">Secundaria</option>
                <option value="Primaria">Preparatoria</option>
            </select>

        </div>
        
        <div class="col-md-4">
          <div class="md-form">
            <input type="number" name="grado" id="grado" min="0" max="6" maxlength="1" class="form-control">
            <label for="nombre">Grado</label>
        </div>
        </div>
        <div class="col-md-4">
          <div class="md-form">
            <input type="text" name="grupo" id="grupo"  class="form-control"onkeyup="this.value = this.value.toUpperCase();">
            <label for="nombre">Grupo</label>
          </div>
        </div>
        
         </div>
      
           
        
       <!-- /DATOS ESCOLARES -->
         
        </div>

        <br>
        <div>
        <!-- DATOS TUTORES -->
        
      <div class="py-4">
           <p class="h5" style="margin: 0;padding: 0;"><i class="fas fa-user-friends"></i>&nbsp;Datos tutores:</p>

           <div class="row" >
             <div class="col-md-6" style="border-right: 1px solid black;">
               <div class="row">
          <div class="col-md-6">
            <div class="md-form">
          <input type="text" name="nombreTutorPaterno" id="nombreTutorPaterno"  class="form-control"onkeyup="this.value = this.value.toUpperCase();">
          <label for="nombre">Nombre de el padre del alumno</label>
        </div>
          </div>
          <div class="col-md-6">
            <div class="md-form">
          <input type="text" name="paternoTutor" id="paternoTutor"  class="form-control"onkeyup="this.value = this.value.toUpperCase();">
          <label for="nombre">Apellido</label>
        </div>
          </div> 
        </div>
         <!-- FOTOGRAFIA TUTOR -->
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="fotoTutorPaterno" name="fotoTutorPaterno" 
          aria-describedby="inputGroupFileAddon02">
          <label class="custom-file-label" for="fotoTutorPaterno">Fotografía del tutor</label>
        </div> 
      </div>
      <!-- FOTOGRAFIA TUTOR -->

             </div>
             <div class="col-md-6">
               <div class="row">
          <div class="col-md-6" >
            <div class="md-form">
          <input type="text" name="nombreTutorMaterno" id="nombreTutorMaterno"  class="form-control"onkeyup="this.value = this.value.toUpperCase();">
          <label for="nombre">Nombre de la madre del alumno</label>
        </div>
          </div>
          <div class="col-md-6">
            <div class="md-form">
          <input type="text" name="maternoTutor" id="maternoTutor"  class="form-control"onkeyup="this.value = this.value.toUpperCase();">
          <label for="nombre">Apellido</label>
        </div>
          </div> 
        </div>
         <!-- FOTOGRAFIA TUTOR -->
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="fotoTutorMaterno" name="fotoTutorMaterno" 
          aria-describedby="inputGroupFileAddon03">
          <label class="custom-file-label" for="fotoTutorMaterno">Fotografía del tutor</label>
        </div> 
      </div>
      <!-- FOTOGRAFIA TUTOR -->

             </div>

           </div>
        
    

        <!-- DATOS TUTORES -->
      </div>
      </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default" type="submit">Crear</button>
      </div>
    </div>
  </div>
  </form>
</div>

<!-- /MODAL CREAR NUEVO -->
<div class="modal fade" id="modalConsultar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
       

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Login</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
       

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Login</button>
      </div>
    </div>
  </div>
</div>











<!-- modales -->



 <?php include ("components/footer.php");?>
 
<?php include ("components/scripts.php");?>
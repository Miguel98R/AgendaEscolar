

<?php include ("components/head.php");?>


  <!-- Start your project here--> 
     
   
<nav class="navbar-dark white d-none d-sm-block py-4">
    
  <div class=" container-fluid d-sm-block">
    <div class="text-center" >
     
    </div>
     
  </div> 
 
</nav>

<section class="py-4 " id="envio">
    <div class="container-fluid  ">
        <div class="row row-30 align-items-xl-center justify-content-xl-between">
            <div class="col-md-6 rounded " >
                <img src="./img/logo.png" class="img-fluid rounded-circle float-right" width="335" height="160" style="-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
border:solid 1px black;"> 
            </div>
            <div class="col-md-6 py-4 px-4 wow fadeInUp " >
            <form action="util/validateLogin.php" method="POST" autocomplete="off" onsubmit="return validarLogin();">
                  <div class="container">
                          <div>
                              <h2 class="h1">Bienvenido</h2>
                          </div>
                          <div>
                              <h3 class="">Inicio de sesión</h3>
                               <?php 
                                      session_start();
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
                              <br>
                              <input type="text" name="user" id="user" placeholder="Ingresa tu usuario">
                              <input type="password" name="psw" id="psw" placeholder="Ingresa tu contraseña">
                             
                              
                          </div>
                           <div class="py-4"><button type="submit" class="btn btn-dark">Iniciar</button></div>
                  
                  </div>
                  
            </form>
                   
            </div>
       
           

        </div>

    
    </div>

</section>

 


  <!-- End your project here-->

<?php include ("components/footer.php");?>
<?php include ("components/scripts.php");?>
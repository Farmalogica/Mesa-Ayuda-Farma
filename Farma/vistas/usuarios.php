<?php  
include "header.php";

if (isset($_SESSION['usuario']) && 
   $_SESSION['usuario']['rol'] == 2){



?>

<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="fw-light">Usuarios</h1>
      <p class="lead"> 
        <button class= "btn btn-primary"  data-bs-toggle="modal" data-bs-target="#modalAgregarUsuarios" >
          Agregar Usuario
        </button>
        <hr>
        <div id="tablaUsuariosLoad">

        </div>
      </p>
      
  </div>
</div>
<?php  

include "usuarios/modalAgregar.php";
include "footer.php";

} else {
  header("location:../index.html");
}

?>


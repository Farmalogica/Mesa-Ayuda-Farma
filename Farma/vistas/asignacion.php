<?php  
include "header.php";

if (isset($_SESSION['usuario']) && 
   $_SESSION['usuario']['rol'] == 2){



?>

<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="fw-light">Asignacion De Equipos</h1>
      <button >Asignar equipo</button>
      <hr>
      <div id="tablaAsignacionesLoad"></div>
   </div>
  </div>
</div>
<?php  include "footer.php";

} else {
  header("location:../index.html");
}

?>


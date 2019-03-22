<!doctype html>
<html lang="es">
  <head>
   <?php include 'includes/head.php';?>

    <title>Contactos-cursos y capacitaciones IT</title>
  </head>
  


  <body>     
   <!--INICIO DEL HEADER-->
    <?php include 'includes/header.php';?>
    <!--FIN DEL HEADER-->

    <main>



<section>
  
<div class="container">

 <div class="col-md-12">
  <div class=" row" >
    <div class="col-md-12 titulo-seccion">
      <h1> Contactos</h1>
      <hr> <!--hr es para colocar esa raya de bajo del titulo-->
    </div>
    
  </div>
  <div class="row">
   <div class="col-md-3">
     <h2>Informaciones </h2>
<!--para colocar icono de bajo de la informacion-->

<!-- para colocar icono en el email. -->
     <div class="media">
  <i class="material-icons">email</i>
  <div class="media-body">
    <h5 class="mt-0">Email</h5>
    info@capacot.com.py
  </div>
</div>
 <!-- para colocar icono en el icono de telefono. -->

<div class="media">
 <i class="material-icons">phone_iphone</i>
  <div class="media-body">
    <h5 class="mt-0">Telefono</h5>
    info@capacot.com.py
  </div>
</div>

 <!-- para colocar icono en el direccion. -->

<div class="media">
 <i class="material-icons">place</i>
  <div class="media-body">
    <h5 class="mt-0">Direccion</h5>
    info@capacot.com.py
  </div>
</div>




   </div>
   <div class="col-md-9">
     <h2>Formulario</h2>

<!--rel ACTION  se coloco que cuando se cargue el formulario abra la pagina de index -->
<!--el GET para que ne le navegador de arriba en la barra aparece lo que se cargo en el formuladio-->
<!--POST no muestra en la barra lo que se cargo en el formulario -->


<form method="GET" action="index.html">
  <label>Nombre</label>
  <input type="text" name="nombre" class="form-control" required> <!--required significa que el campo es obligatorio completar-->


  <label>Apellido</label>
  <input type="text" name="apellido" class="form-control" required>

  <label>Email</label>
  <input type="email" name="email" class="form-control" required>

  <label>Telefono</label>
  <input type="text" name="telefono" class="form-control" required>

  <label>Asunto</label>
  <input type="text" name="asunto" class="form-control" required>

<label>Mensaje</label>         <!--cols columna y rows filas-->
<textarea class="form-control" cols="30" rows="10" name="mensaje" required></textarea>
<br>
<input type="submit" name="enviar" value="enviar" class="btn btn-success">


</form>

   </div>
    </div>
 </div>
 </div>
</section>


<section>
            <!--MAPA-->
<div class="container-fluid">
 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14403.479553783354!2d-54.6295968!3d-25.5093855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb12fbfc9747b41e3!2sCapacit!5e0!3m2!1ses-419!2spy!4v1552607110601" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>

</section>

</main>

<!--INICIO DEL footer-->
    <?php include 'includes/footer.php';?>
    <!--FIN DEL footer-->
<!--INICIO DEL SCRIPT-->
    <?php include 'includes/script.php';?>
    <!--FIN DEL SCRIPT-->
    
  </body>
</html>
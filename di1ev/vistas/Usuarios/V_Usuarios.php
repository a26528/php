<?php 
    
?>
<form id="formularioBuscar" name="formularioBuscar" onkeydown="return event.key != 'Enter'">
  <div class="mb-3">
    <label for="nombreInput" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombreInput" name="nombreInput">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3">
    <label for="apellidosInput" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="apellidosInput" name="apellidosInput">
  </div>
  <div class="mb-3">
    <label for="emailInput" class="form-label">Email</label>
    <input type="email" class="form-control" id="emailInput" name="emailInput">
  </div>
  <div class="mb-3">
    <label for="movilInput" class="form-label">Movil</label>
    <input type="text" class="form-control" id="movilInput" name="movilInput">
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="button" onclick="buscarUsuarios()" class="btn btn-primary">Submit</button>
</form>

<!-- <form id="formularioBuscar" name="formularioBuscar" onkeydown="return event.key != 'Enter'">
    <label for="b_texto">
    <input type="text" id="b_texto" name="b_texto"> 
    </label>
    <button >
        Buscar
    </button>
</form> -->

<div id="capaResultadoBusqueda"></div>

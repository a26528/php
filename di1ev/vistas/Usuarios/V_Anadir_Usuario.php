<?php 
    
?>
<form id="formularioBuscars" name="formularioBuscars" onkeydown="return event.key != 'Enter'" >
  <div class="mb-3">
    <label for="nombreInput" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombreInput" name="nombreInput" style="align-items: center;" >
  </div>
  <div class="mb-3">
    <label for="apellidosInput" class="form-label">Apellido 1</label>
    <input type="text" class="form-control" id="apellidosInput" name="apellidosInput">
  </div>
  <div class="mb-3">
    <label for="apellidosInput" class="form-label">Apellido 2</label>
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
  <div class="mb-3">
    <label for="apellidosInput" class="form-label">Login</label>
    <input type="text" class="form-control" id="apellidosInput" name="apellidosInput">
  </div>
  <div class="mb-3">
    <label for="apellidosInput" class="form-label">Pass</label>
    <input type="text" class="form-control" id="apellidosInput" name="apellidosInput">
  </div>
  <button type="button" onclick="buscarUsuarios()" class="btn btn-primary" style="background-color: #D3BDB0;">Buscar</button>
  <button type="button" onclick="nuevo_Usuario()" class="btn btn-primary" style="background-color: #D3BDB0;">Añadir</button>
</form>


<div id="capaResultadoBusqueda"></div>

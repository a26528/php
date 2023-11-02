<?php 
    
?>
<form id="formularioBuscar" name="formularioBuscar" onkeydown="return event.key != 'Enter'" >
  <div class="mb-3">
    <label for="nombreInput" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombreInput" name="nombreInput" style="align-items: center;" >
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
  <button type="button" onclick="buscarUsuarios()" class="btn btn-primary" style="background-color: #D3BDB0;">Buscar</button>
</form>


<div id="capaResultadoBusqueda"></div>

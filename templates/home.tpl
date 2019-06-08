{include file="header.tpl"}
{include file="navbar.tpl"}

<div class="container">
<div class="container">
<h1>{$Titulo}</h1>
  <form method="post" action="buscar">



  <div class="form-group">
    <label for="fecha">fecha</label>

     <input id="datepicker" width="276" name="fecha"  />
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
   
  </div>
  
  <button type="submit" class="btn btn-primary">buscar</button>
</form>
</div>


<table class="table table-bordered table-dark col-3">
  <thead>
  <tr>
    <th scope='col'>nro estanteria</th>
    <th scope='col'>nro fila</th>
    <th scope='col'>nro posicion </th>
    
  </tr>
</thead>
<tbody>
    <tr>
      {foreach from=$posiciones item=posicion}
        <tr>
          <td>{$posicion['nro_estanteria']}</td>
          <td>{$posicion['nro_fila']}</td>
          <td>{$posicion['nro_posicion']}</td>
          
         </tr>
       {/foreach}
    </tr>

  </tbody>
</table>
</div>

<div class="container">
<div class="container">
<h1>{$Titulo2}</h1>
  <form method="post" action="buscarcliente">



  <div class="form-group">
    <label for="fecha">codigo cliente cuit-cuil</label>

   <div class="input-group mb-3">
  <input type="text" class="form-control"  name="cuilcuit" placeholder="cuit-cuil" aria-label="cuit-cuil" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">buscar</button>
  </div>
</div>
  </div>
  
</form>
</div>


<table class="table table-bordered table-dark col-3">
  <thead>
  <tr>
    <th scope='col'>nro estanteria</th>
    <th scope='col'>nro fila</th>
    <th scope='col'>nro posicion </th>
    <th scope='col'>estado </th>
  </tr>
</thead>
<tbody>
    <tr>
      {foreach from=$posicionesCliente item=posicion}
        <tr>
          <td>{$posicion['nro_estanteria']}</td>
          <td>{$posicion['nro_fila']}</td>
          <td>{$posicion['nro_posicion']}</td>
          <td>{$posicion['estado']}</td>
         </tr>
       {/foreach}
    </tr>

  </tbody>
</table>
</div>




{include file="footer.tpl"}

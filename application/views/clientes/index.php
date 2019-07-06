<<title>Clientes</title>

<div class="body">
<h3 class="text-center py-2">Clientes</h3> 



    <a class="btn btn-success" data-toggle="modal" data-target="#newClient"><i class="fas fa-plus"></i></a>

    <table class="table text-center">
    <thead class="bg-primary">
        <tr>
            <th>Foto</th>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    <?php
            $rs = CRUD::listado();
            foreach ($rs as $cliente){
                $urlEdit = base_url("main/editCliente/{$cliente->idCliente}");
                $urlDel = base_url("main/delCliente/{$cliente->idCliente}");

            echo "
            <tr>
                <td>{$cliente->foto}</td>            
                <td>{$cliente->cedula}</td>
                <td>{$cliente->nombre}</td>
                <td>{$cliente->correo}</td>
                <td>{$cliente->telefono}</td>
                <td class='inline'>
                    <a href='{$urlEdit}' class='btn btn-primary px-2'><i class='fas fa-edit'></i></a>
                    
                    
                    
                    <a onclick= \"return confirm('¿Estas seguro de eliminar a {$cliente->nombre}?')\" href='{$urlDel}' class='btn btn-danger px-2'><i class='fas fa-trash-alt'></i></a>

                 
                </td>
            </tr>";
             }
             ?>


         
    </tbody>
    </table>
</div>





<?php
    if($_POST){
        $person = $_POST;
        CRUD::saveCliente($person);
        redirect('main/clients');
    }
?> 

<div class="modal fade" id="newClient" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Agregar cliente</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">

      <form method="POST">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" name = 'nombre' required>
          <label data-error="" data-success="" for="orangeForm-name" >Nombre</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-id-card prefix grey-text"></i>
          <input type="text" id="orangeForm-email" class="form-control validate" name = 'cedula' required>
          <label data-error="" data-success="" for="orangeForm-email" >Cedula</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="orangeForm-pass" class="form-control validate" name = 'correo' required>
          <label data-error="Introduzca un correo valido" data-success="" for="orangeForm-pass">Correo</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-phone prefix grey-text"></i>
          <input type="text" id="orangeForm-pass" class="form-control validate" name = 'telefono' required>
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Telefono</label>
        </div>

        
        <div class="form-group">
            <i class="far fa-images"></i>
            <label data-error="wrong" data-success="right" for="orangeForm-pass">Foto</label>
        </div>
        <input type="file" id="input-file-now" class="file-upload" name = 'foto' />

      </div>


      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>

    </div>
  </div>
</div>

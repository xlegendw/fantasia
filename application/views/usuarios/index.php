<title>Usuarios</title>

<div class="body">
<h3 class="text-center py-2">Usuarios</h3> 



    <a class="btn btn-success" data-toggle="modal" data-target="#newClient"><i class="fas fa-plus"></i></a>

    <table class="table text-center">
    <thead class="bg-primary">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>
    <?php
            $rs = CRUD::listadoU();
            foreach ($rs as $usuario){
                $urlEdit = base_url("main/editUsuario/{$usuario->idUsuario}");
                $urlDel = base_url("main/delUsuario/{$usuario->idUsuario}");

            echo "
            <tr>
                <td>{$usuario->idUsuario}</td>            
                <td>{$usuario->username}</td>
                <td>{$usuario->password}</td>
                <td class='inline'>
                    <a href='{$urlEdit}' class='btn btn-primary px-2'><i class='fas fa-edit'></i></a>
                    
                    
                    
                    <a onclick= \"return confirm('¿Estas seguro de eliminar a {$usuario->username}?')\" href='{$urlDel}' class='btn btn-danger px-2'><i class='fas fa-trash-alt'></i></a>

                 
                </td>
            </tr>";
             }
             ?>


         
    </tbody>
    </table>
</div>





<?php
    if($_POST){
        $user = $_POST;
        CRUD::saveUsuario($user);
        redirect('main/usuario');
    }
?> 

<div class="modal fade" id="newClient" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Agregar Usuario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">

      <form method="POST">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" name = 'username' required>
          <label data-error="" data-success="" for="orangeForm-name" >Username</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-id-card prefix grey-text"></i>
          <input type="password" id="orangeForm-email" class="form-control validate" name = 'password' required>
          <label data-error="" data-success="" for="orangeForm-email" >Password</label>
        </div>


      </div>


      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>

    </div>
  </div>
</div>

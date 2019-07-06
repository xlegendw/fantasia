<title>Editar Usuario</title>

<?php
$usuario = new stdClass;
$usuario->idUsuario = '';
$usuario->username = '';
$usuario->password = '';


if(isset($idUsuario)){
    $res= CRUD::obtainUsuario($idUsuario);
    if(count($res)>0){
        $usuario = $res [0];
    }
}

    if($_POST){
        $usuario = $_POST;
        CRUD::updateUsuario($usuario);
        redirect('main/usuario');
    }


?>

<div class="body">
    <h3 class="text-center py-2">Editar usuario </h3>


    <div class="modal-body mx-3">

      <form method="POST">
      <input type="text" name="idUsuario" value="<?= $usuario->idUsuario ?>">
        <div class="md-form mb-5">
          <i class="fas fa-signature prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" name = 'username' required  value="<?= $usuario->username ?>">
          <label data-error="wrong" data-success="right" for="orangeForm-name"><?= $usuario->username ?></label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-hand-holding-usd prefix grey-text"></i>
          <input type="text" id="orangeForm-email" class="form-control validate" name = 'password' value="<?= $usuario->password ?>" >
          <label data-error="wrong" data-success="right" for="orangeForm-email"><?= $usuario->password ?></label>
        </div>


      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
      </form>
    </div>

</div>
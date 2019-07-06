<title>Editar Producto</title>

<?php
$cliente = new stdClass;
$cliente->idCliente = '';
$cliente->cedula = '';
$cliente->nombre = '';
$cliente->correo = '';
$cliente->telefono = '';


if(isset($idCliente)){
    $res= CRUD::obtainCliente($idCliente);
    if(count($res)>0){
        $cliente = $res [0];
    }
}

    if($_POST){
        $cliente = $_POST;
        CRUD::updateCliente($cliente);
        redirect('main/clients');
    }


?>

<div class="body">
    <h3 class="text-center py-2">Editar producto </h3>


    <div class="modal-body mx-3">

      <form method="POST">
      <input type="text" name="idCliente" value="<?= $cliente->idCliente ?>">
        <div class="md-form mb-5">
          <i class="fas fa-signature prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" name = 'cedula' required  value="<?= $cliente->cedula ?>">
          <label data-error="wrong" data-success="right" for="orangeForm-name"><?= $cliente->cedula ?></label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-hand-holding-usd prefix grey-text"></i>
          <input type="text" id="orangeForm-email" class="form-control validate" name = 'nombre' value="<?= $cliente->nombre ?>" >
          <label data-error="wrong" data-success="right" for="orangeForm-email"><?= $cliente->nombre ?></label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-money-bill-alt prefix grey-text"></i>
          <input type="email" id="orangeForm-pass" class="form-control validate" name = 'correo' value="<?= $cliente->correo ?>">
          <label data-error="wrong" data-success="right" for="orangeForm-pass"><?= $cliente->correo ?></label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-dolly-flatbed prefix grey-text"></i>
          <input type="text" id="orangeForm-pass" class="form-control validate" name = 'telefono' value="<?= $cliente->telefono ?>">
          <label data-error="wrong" data-success="right" for="orangeForm-pass"><?= $cliente->telefono ?></label>
        </div>


        
        <div class="form-group">
            <i class="far fa-images"></i>
            <label data-error="wrong" data-success="right" for="orangeForm-pass">Foto</label>
            
        </div>
        <input type="file" id="input-file-now" class="file-upload" />


      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
      </form>
    </div>

</div>
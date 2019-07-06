<title>Editar Producto</title>

<?php
$producto = new stdClass;
$producto->idProducto = '';
$producto->nombre = '';
$producto->coste = '';
$producto->precio = '';
$producto->stock = '';


if(isset($idProducto)){
    $res= CRUD::obtainProducto($idProducto);
    if(count($res)>0){
        $producto = $res [0];
    }
}

    if($_POST){
        $producto = $_POST;
        CRUD::updateProducto($producto);
        redirect('main/products'); 
    }


?>

<div class="body">
    <h3 class="text-center py-2">Editar producto </h3>


    <div class="modal-body mx-3">

      <form method="POST">
      <input type="hidden" name="idProducto" value="<?= $producto->idProducto ?>">
        <div class="md-form mb-5">
          <i class="fas fa-signature prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" name = 'nombre' required  value="<?= $producto->nombre ?>">
          <label data-error="wrong" data-success="right" for="orangeForm-name"><?= $producto->nombre ?></label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-hand-holding-usd prefix grey-text"></i>
          <input type="number" id="orangeForm-email" class="form-control validate" name = 'coste' value="<?= $producto->coste ?>" >
          <label data-error="wrong" data-success="right" for="orangeForm-email"><?= $producto->coste ?></label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-money-bill-alt prefix grey-text"></i>
          <input type="number" id="orangeForm-pass" class="form-control validate" name = 'precio' value="<?= $producto->precio ?>">
          <label data-error="wrong" data-success="right" for="orangeForm-pass"><?= $producto->precio ?></label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-dolly-flatbed prefix grey-text"></i>
          <input type="text" id="orangeForm-pass" class="form-control validate" name = 'stock' value="<?= $producto->stock ?>">
          <label data-error="wrong" data-success="right" for="orangeForm-pass"><?= $producto->stock ?></label>
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
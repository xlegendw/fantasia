<title>Productos</title>

<div class="body">
<h3 class="text-center py-2">Productos</h3>


 <a class="btn btn-success" data-toggle="modal" data-target="#newProduct"><i class="fas fa-plus"></i></a>

<table class="table text-center ">
    <thead class="bg-primary">
        <tr>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Costo/U <b>RD$</b></th>
            <th>Precio/U <b>RD$</b></th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody class="border">
    <?php
            $rs = CRUD::listadoP(); 
            foreach ($rs as $producto){
                $urlEdit = base_url("main/editProducto/{$producto->idProducto}");
                $urlDel = base_url("main/delProducto/{$producto->idProducto}");

            echo "
            <tr>
                <td>{$producto->foto}</td>            
                <td>{$producto->nombre}</td>
                <td>{$producto->coste}</td>
                <td>{$producto->precio}</td>
                <td>{$producto->stock}</td>
                <td class='inline'>
                    <a href='{$urlEdit}' class='btn btn-primary px-2'><i class='fas fa-edit'></i></a>
                    
                    
                    
                    <a onclick= \"return confirm('¿Estas seguro de eliminar a {$producto->nombre}?')\" href='{$urlDel}' class='btn btn-danger px-2'><i class='fas fa-trash-alt'></i></a>

                 
                </td>
            </tr>";
             }
             ?>

    </tbody>


    </table>




</div>





<?php
    if($_POST){
        $producto = $_POST;
        CRUD::saveProducto($producto);
        redirect('main/products');
    }
?> 


<div class="modal fade" id="newProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Agregar producto</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">

      <form method="POST">
        <div class="md-form mb-5">
          <i class="fas fa-signature prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" name = 'nombre' required>
          <label data-error="wrong" data-success="right" for="orangeForm-name">Nombre</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-hand-holding-usd prefix grey-text"></i>
          <input type="float" id="orangeForm-email" class="form-control validate" name = 'coste' required>
          <label data-error="wrong" data-success="right" for="orangeForm-email">Costo</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-money-bill-alt prefix grey-text"></i>
          <input type="number" id="orangeForm-pass" class="form-control validate" name = 'precio' required>
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Precio</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-dolly-flatbed prefix grey-text"></i>
          <input type="text" id="orangeForm-pass" class="form-control validate" name = 'stock' required>
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Stock</label>
        </div>


        
        <div class="form-group">
            <i class="far fa-images"></i>
            <label data-error="wrong" data-success="right" for="orangeForm-pass">Foto</label>
            
        </div>
        <input type="file" id="input-file-now" class="file-upload" />


      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<title>Facturacion</title>

<div class="body">
<h3 class="text-center py-2">Vender</h3>




    <div class="group pb-2">
    <label for="">Seleccione Cliente</label>

    <select name="" id="" class="form-control ">
        <option value=""></option>
    <?php
    $rs = CRUD::listado();
        foreach ($rs as $cliente){

            echo "
            <option value='{$cliente->idCliente}'>{$cliente->nombre}</option>
            ";
            }
    ?>
    </select>
    </div>


<div class="agregar">
    
    <div class="text-center">
        <a href="" class="btn btn-success">Agregar producto</a>
    </div>
</div>








<table class="table text-center ">
    <thead class="bg-primary">
        <tr>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody class="border">
        <tr>
            <td type="text"  name=""></td>
          
        </tr>
    </tbody>


    </table>









<div class="group">
<label for="">Subtotal: </label>
</div>

<div class="group">
<label for="">ITBIS: </label>
</div>

<div class="group">
<label for="">Total: </label>
</div>






<div class="text-center inline sticky-bottom">
    <a href="" class="btn btn-success">Pagar</a>
    <a href="" class="btn btn-primary">Cancelar</a>
</div>

</div>



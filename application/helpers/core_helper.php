<?php

class CRUD{

// ***************************************Cliente********************************************
    static function saveCliente($cliente){
         $CI =& get_instance();

         $CI->db->insert('clientes', $cliente);

    } 

    static function listado(){
         $CI =& get_instance();
         $rs = $CI->db->get('clientes')->result(); 
         return $rs;
    }

    static function delCliente($idCliente){
          $CI =& get_instance();

          $query = "DELETE FROM clientes WHERE idCliente=?";

          $CI->db->query($query, [$idCliente]);
     }

     static function obtainCliente($idCliente){
          $CI =& get_instance();
          $CI->db->where('idCliente',$idCliente);
          $res =  $CI->db->get('clientes')->result(); 
          return $res;
     }

     static function updateCliente($cliente){
          $CI =& get_instance();
          $CI->db->where('idCliente', $cliente['idCliente']);
          $CI->db->update('clientes', $cliente);

     }


     

// ******************************************************************************************


// ***************************************Producto*******************************************
     static function saveProducto($producto){
          $CI =& get_instance();

          $CI->db->insert('productos', $producto);

     } 

     static function listadoP(){
          $CI =& get_instance();
          $rs = $CI->db->get('productos')->result(); 
          return $rs;
     }

     static function delProducto($idProducto){
          $CI =& get_instance();

          $query = "DELETE FROM productos WHERE idProducto=?";

          $CI->db->query($query, [$idProducto]);
     }

     static function obtainProducto($idProducto){
          $CI =& get_instance();
          $CI->db->where('idProducto',$idProducto);
          $res =  $CI->db->get('productos')->result(); 
          return $res;
     }

     static function updateProducto($producto){
          $CI =& get_instance();
          $CI->db->where('idProducto', $producto['idProducto']);
          $CI->db->update('productos', $producto);

     }

// ******************************************************************************************

//****************************************Usuarios******************************************* 


static function saveUsuario($usuario){
     $CI =& get_instance();

     $CI->db->insert('usuario', $usuario);

} 

static function listadoU(){
     $CI =& get_instance();
     $rs = $CI->db->get('usuario')->result(); 
     return $rs;
}

static function delUsuario($idUsuario){
      $CI =& get_instance();

      $query = "DELETE FROM usuario WHERE idUsuario=?";

      $CI->db->query($query, [$idUsuario]);
 }

 static function obtainUsuario($idUsuario){
      $CI =& get_instance();
      $CI->db->where('idUsuario',$idUsuario);
      $res =  $CI->db->get('usuario')->result(); 
      return $res;
 }


 static function updateUsuario($usuario){
     $CI =& get_instance();
     $CI->db->where('idUsuario', $usuario['idUsuario']);
     $CI->db->update('usuario', $usuario);

}






// ***************************************Facturacion****************************************

     

// ******************************************************************************************



    /*
    static function obtainPerson($id){
         $CI =& get_instance();
         $CI->db->where('id',$id);
         $rs =  $CI->db->get('people')->result(); 
         return $rs;
    }

    static function updatePerson($id){
         $CI =& get_instance();
         $CI->db->set('people')->where('id', $id);    
    }

*/
    
}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index(){
        if(isset($_POST['password'])){
            $this->load->model('usuario_model');
            if($this->usuario_model->login($_POST['username'],md5($_POST['password']))){
                
                redirect('main/home');
                
            }else{
                echo "<h2 class='text-center text-danger'>intentelo de nuevo</h2>";

            }

        }

		$this->load->view('login/index');
	}

	public function home(){
		$this->load->view('layouts/homeSide');
		$this->load->view('home/index');
		$this->load->view('layouts/footer');

	}


//************************* Clientes ******************************************
	public function clients(){
		$this->load->view('layouts/homeSide');
		$this->load->view('clientes/index');
		$this->load->view('layouts/footer');
	}

	public function editCliente($idCliente=0){
		$this->load->view('layouts/homeSide');
		$this->load->view('clientes/editCliente', ['idCliente'=>$idCliente]);
		$this->load->view('layouts/footer');
	}


	public function delCliente($idCliente){
        CRUD::delCliente($idCliente);

        redirect ('main/clients');

    }



//******************************************************************************



//*********************************Producto*************************************

	public function products(){
		$this->load->view('layouts/homeSide');
		$this->load->view('productos/index');
		$this->load->view('layouts/footer');

	}

	public function editProducto($idProducto=0){

		$this->load->view('layouts/homeSide');
		$this->load->view('productos/editProducto', ['idProducto'=>$idProducto]);
		$this->load->view('layouts/footer');
	}

	public function delProducto($idProducto){
        CRUD::delProducto($idProducto);

        redirect ('main/products');

    }
//******************************************************************************



	public function Sell(){
		$this->load->view('layouts/homeSide');
		$this->load->view('vender/index');
		$this->load->view('layouts/footer');

	}

	public function bills(){
		$this->load->view('layouts/homeSide');
		$this->load->view('ventas/index');
		$this->load->view('layouts/footer');

	}

	public function userArea(){
		$this->load->view('layouts/homeSide');
		$this->load->view('userArea/index');
		$this->load->view('layouts/footer');

	}

	//*********************************Usuarios*************************************

	public function usuario(){
		$this->load->view('layouts/homeSide');
		$this->load->view('usuarios/index');
		$this->load->view('layouts/footer');

	}
	public function editUsuario($idUsuario=0){
		$this->load->view('layouts/homeSide');
		$this->load->view('usuarios/editUsuario', ['idUsuario'=>$idUsuario]);
		$this->load->view('layouts/footer');
	}


	public function delUsuario($idUsuario){
        CRUD::delUsuario($idUsuario);

        redirect ('main/usuario');


}
}
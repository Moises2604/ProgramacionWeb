<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class filmController extends CI_Controller{
		public function __construct(){
			parent::__construct();
		//Cargamos el modelo a usar
		$this ->load-> model('filmModel');
		}
		public function index(){
			if(isset($_POST['datosUsuario'])){
			$Pelicula=$_POST['Pelicula'];
			$Nombre=$_POST['Nombre'];
			$Apellido=$_POST['Apellido'];
			$data['Pelicula']=$Pelicula;
			$data['Nombre']=$Nombre;
			$data['Apellido']=$Apellido;

			//var_dump($data);
			//var_dump($contraseña);
			//$data['categoria'] = $this->filmModel-> getCategory($Pelicula);
			//$data['actor'] = $this->filmModel-> getTotalPeliculas();
			//$data['custom'] = $this->filmModel-> getBestCustom();
			$data['fecha'] = $this->filmModel-> getRetraso();
			$this->load->view('filmView',$data);
		}else{
			$this->load->view('wel');
		}

		}
		public function insertar(){
			if(isset($_POST['datosUsuario'])){
				$current_date = date("Y:m:d h:i:s");
				$this->filmModel->putActor($_POST['Pelicula'],$_POST['Nombre'],$current_date);
				$this->load->view('wel');
				//redirect('welcome_message');
			}else{
				$this->load->view('wel');
			}
		}
	}
 ?>
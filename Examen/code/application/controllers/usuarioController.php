<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class usuarioController extends CI_Controller{
		public function __construct(){
			parent::__construct();
		//Cargamos el modelo a usar
		$this ->load-> model('usuariosModel');

		}
		public function index(){
			if(isset($_POST['datosUsuario'])){
			$usuario=$_POST['usuario'];
			$pass=sha1($_POST['pass']) ;
			$data['usuario']=$usuario;
			$data['pass']=$pass;

			//var_dump($data);
			//var_dump($contraseña);
			//$data['categoria'] = $this->filmModel-> getCategory($Pelicula);
			//$data['actor'] = $this->filmModel-> getTotalPeliculas();
			//$data['custom'] = $this->filmModel-> getBestCustom();
			$data['idus']=$this->usuariosModel->obtenerID($usuario,$pass);
			$query = $this->usuariosModel->verifica($usuario,$pass);
			if($query){
				$data['peliculas']=$this->usuariosModel->peliculas();
				$this->load->view('usuarioView',$data);
			}else{

					$this->load->view('registrarUserView');
			}	

		}
	/*	public function insertar(){
			if(isset($_POST['datosUsuario'])){
				$current_date = date("Y:m:d h:i:s");
				$this->filmModel->putActor($_POST['Pelicula'],$_POST['Nombre'],$current_date);
				$this->load->view('wel');
				//redirect('welcome_message');
			}else{
				$this->load->view('wel');
			}
		}
		*/
	}
	public function regis(){
		$this->load->view('registro');
	}
	public function rent(){
		if(isset($_POST['rentar'])){
			$id=$_POST['va'];
			$datan['info']=$this->usuariosModel->datosPelicula($id);
			
			$this->load->view('rentar',$datan);
		}
		
	}

	public function nuevoUsuario(){
		if(isset($_POST['datosUsuario2'])){
			$usuario=$_POST['usuario'];
			$pass=sha1($_POST['contrasena']) ;
			$data['usuario']=$usuario;
			$data['peliculas']=$this->usuariosModel->peliculas();
			$data['nu'] = $this->usuariosModel->regist($usuario,$pass);
			$this->load->view('usuarioRegistrado',$data);
			
		}
	
	}

	public function Guardar(){
			$data['rentas']=$this->usuariosModel->RegistrarPelicula($username, $peliculas_id, $fecha_renta);
			$this->load->view('rentada',$data);
			}

	}

 ?>

<?php 
	if (! defined('BASEPATH')){
  exit('No direct script acces allowed');

}
class usuariosModel extends CI_MODEL{
	public function verifica($usuario,$pass){
				 $this->db->where('username',$usuario);
				 $this->db->where('pass',$pass);
				 $query = $this->db->get('user')->row_array();
				 return $query;
						 
	}
	public function nuevoUsuario($usuario,$pass){
		return $this->db->set('username',$usuario)
				 ->set('pass',$pass)
				 ->insert('user');
	}
	public function verUsuarios(){
		return $this->db->Select('user_id')
				 ->from('user')
				 ->limit('1')
				 ->get('')
				 ->result();
	}
	public function regist($usuario,$pass){
		return $this->db->set('username',$usuario)
						->set('pass',$pass)
						->insert('user');
	}
	public function peliculas(){
		return $this->db->Select()
				 ->from('peliculas')
				 ->get('')
				 ->result();
	}

	public function RegistrarPelicula($username,$peliculas_id,$fecha_renta){
		return $this->db->set('username',$id)
						->set('peliculas_id',$nom)
						->set('fecha_renta',$fecha)
						->insert('rentas');
	}
	public function datosPelicula($id){
		return $this->db->Select('peliculas_id,nombre,año,duracion,imagen')
				 ->from('peliculas')
				 ->where('peliculas_id',$id)
				 ->get('')
				 ->result();

	}
	public function obtenerID($usuario,$pass){
		return $this->db->Select('user_id')
				 ->from('user')
				 ->where('username',$usuario)
				 ->where('pass',$pass)
				 ->get('')
				 ->result();
	}
}
 ?>
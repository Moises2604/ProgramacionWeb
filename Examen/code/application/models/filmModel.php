<?php 
	if (! defined('BASEPATH')){
  exit('No direct script acces allowed');
}
class filmModel extends CI_MODEL{
	public function getCategory($Pelicula){
		return $this->db->Select('t1.title,t3.name')
						->from('film t1')
						->join('film_category t2','t2.film_id = t1.film_id')
						->join('category t3','t3.category_id = t2.category_id')
						->where('t1.title', $Pelicula)
						->get('')
						->result();
	}
	public function getTotalPeliculas(){
		return $this->db->Select('t1.actor_id, t1.first_name, t1.last_name, count(t2.actor_id) as NumPeli')
						->from('actor t1')
						->join('film_actor t2','t2.actor_id = t1.actor_id')
						//->where('t1.first_name', $Nombre)
						//->where('t1.last_name',$Apellido)
						->group_by('t1.actor_id')
						->get('')
						->result();

	}
	public function getBestCustom(){
		return $this->db->Select('t1.customer_id, t1.first_name, t1.last_name, sum(amount) as Total')
						->from('customer t1')
						->join('payment t2','t2.customer_id = t1.customer_id')
						->group_by('t1.customer_id')
						->order_by('Total desc')
						->limit('1')
						->get('')
						->result();
						//Todos los clientes que tengan peliculas atrasadas
						//Apelido y nombre
						//Titulo de la pelicula
						//Cuantos dias entre 
						//183 


	}
	public function getRetraso(){
		return $this->db->Select('concat(t1.first_name," ",t1.last_name) as Nombre, Title, DATEDIFF (CURDATE(),t2.return_date) as Dias, t4.rental_rate, DATEDIFF (CURDATE(),t2.return_date)*t4.rental_rate as Deuda')
						->from('customer t1')
						->join('rental t2','t2.customer_id = t1.customer_id')
						->join('inventory t3','t3.inventory_id = t2.inventory_id')
						->join('film t4','t4.film_id = t3.film_id')
						->where('DATEDIFF(CURDATE(),t2.return_date) >0')
						->get('')
						->result();
						//Todos los clientes que tengan peliculas atrasadas
						//Apelido y nombre
						//Titulo de la pelicula
						//Cuantos dias entre 
						//183 


	}
	public function putActor($Pelicula,$Nombre,$current_date){
		return $this->db->set('first_name',$Pelicula)
						->set('last_name',$Nombre)
						->set('last_update',$current_date)
						->insert('actor');
	}
	public function UpdateActor($Pelicula,$Nombre,$current_date){
		return $this->db->set('first_name',$first_name)
						->set('last_name',$last_name)
						->set('last_update',$current_date)
						->where('actor_id',201)
						->update('actor');
	}

}
 ?>

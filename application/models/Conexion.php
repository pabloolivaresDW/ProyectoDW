<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

	class Conexion extends CI_Model{
		public function __construct() {
	    parent::__construct();
	    $this->load->database();
	  }
	  function obtenerdatos(){
	  	$query = $this->db->get('graficos');
	  	if($query->num_rows()>0) return $query;
	  	else return false;
	  }

	 

	}
?>

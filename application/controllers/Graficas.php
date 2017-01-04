<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
* Clase controladora de Graficas
*/
class Graficas extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Conexion');
	}

	function index(){
		$query = $this->Conexion->obtenerdatos();
		if($query != false){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
		}
		$json = json_encode($data);
		$this->load->view('grafico');
	}

}
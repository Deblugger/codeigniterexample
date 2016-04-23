<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejemplos extends CI_Controller {

	/*
	Los controladores es el centro de todas las operaciones, que no sean sobre las bases de datos (en teoria), de nuestro sistema.

	Si tenemos montado nuestro sistema en un localhost, la ruta para acceder a la vista sería:

	-> localhost/codeigniter/index.php/[CONTROLADOR]/[FUNCION]/[PARAMETROS]
	
	El index es la que se carga en caso de no indicar función e indicar solo el controlador, de esta forma, podemos tener varías vistas en un
	solo controlador.
	*/

	public function index(){
		$this->load->view('welcome_message');
	}

	public function ejemplo(){
		// Los controladores permiten pasar datos mediante un array a las vistas, a estos datos se acceden con $variable:
		$data['mensaje'] = 'Hola CodeIgniter'; // A esta variable se accederia en la vista con $mensaje
		$this->load->view('ejemplo', $data); // $this hace referencia al controlador, que tiene todos sus metdos y, como no, los que hereda de CI_Controller
	}

	public function ejemplo_parametros($msg){
		$data['mensaje'] = $msg;
		$this->load->view('ejemplo', $data);
	}

	public function ejemplo_modelo(){
		// Con la base de datos se trabaja a través de los modelos, los cuales se cargan así:
		$this->load->model('model');
		// Los modelos se deben de guardar en la carpeta models, de la misma forma, las views se guardan en la carpeta views y los controladores en controllers
		// Para llamar a un modelo se hace lo siguiente:
		$this->model->select_query('*'); // Siendo model el nombre del modelo y select_query la función en cuestión
	}
}

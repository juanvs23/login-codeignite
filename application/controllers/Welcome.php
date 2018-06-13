<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public $email;
	public $pass;
	public $correcto;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->view('layout/head');
		 $email = $this->input->get('email');
    $pass = $this->input->get('pass');
		$correcto = array( 'correcto'=>'<h3 class=" text-center text-success ">Hola juan</h3>','email'=> $email,
    		'pass'=>$pass);
		

	}

	public function index()
	{
		$correcto['correcto']='';
		$this->load->view('welcome_message',$correcto);
		$this->load->view('layout/footer');
	}
	
	public function registrar()
	{
		$this->load->view('registrar');
		$this->load->view('layout/footer');
	}
	public function revisar() {
    $email = $this->input->get('email');
    $pass = $this->input->get('pass');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|max_length[12]');
 
 if ($this->form_validation->run()==false) {

 		$correcto['correcto'] = "<h3>Falta correo</h3>";

    	$this->load->view('welcome_message', $correcto);
 	
 }else {
 	

    if ($email=='juanvs23@gmail.com' and  $pass=='juan123!') {
    	
    	
    		$correcto['correcto'] = "<h3>Hola  juan</h3>";

    	$this->load->view('welcome_message', $correcto);

    }else {
    	
    		$correcto['correcto'] = "<h3> Tu no eres Juan</h3>";

    	$this->load->view('welcome_message', $correcto);
    }
 }
    

    
}
}

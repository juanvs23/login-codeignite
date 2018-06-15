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
		
		$this->load->view('layout/head');
		 $email = $this->input->post('email');
    $pass = $this->input->post('pass');
		$correcto = array( 'correcto'=>'<h3 class=" text-center text-success ">Hola juan</h3>','emailfalta'=> '',
    		'pass'=>$pass);
		

	}

	public function index()
	{
		$correcto['correcto']='';
		$this->load->view('welcome_message',$correcto);
		$this->load->view('layout/footer');
	}
	public function testing(){
		echo $email = $this->input->post('email');
		echo $email = $this->input->post('pass');
	}
	public function registrar()
	{
		$this->load->view('registrar');
		$this->load->view('layout/footer');
	}
	public function revisar() {
    $email = $this->input->post('email');
    $pass = $this->input->post('pass');
   
 	
    	
    if ($email=='fake@gmail.com' and  $pass=='fake123!') {
    	
    	
    		$correcto['correcto'] = "<h3>Hola  juan</h3>";

    	$this->load->view('welcome_message', $correcto);
    	$this->load->view('layout/footer');

    }else {
    	
    		$correcto['correcto'] = "<h3> Tu no eres Juan</h3>";

    	$this->load->view('welcome_message', $correcto);
    	$this->load->view('layout/footer');
    }
 }
    

    

}

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
	
	
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->view('layout/head');
		/* $email=  $this->input->post('email'); 
        $pass= $this->input->post('pass');*/

	}

	public function index()
	{
		$this->load->view('welcome_message');
		$this->load->view('layout/footer');
	}
	/*public function revisar($mail, $pass)
	{   
		if ($mail == 'juanvs23@gmal.com' and $pass =='juan123!') {
			$this->load->view('registrar');
			
		}else {
			
		$this->load->view('registrar');
		}
		$this->load->view('layout/footer');
	}*/
	public function registrar()
	{
		$this->load->view('registrar');
		$this->load->view('layout/footer');
	}
	public function revisar() {
    $email = $this->input->get('email');
    $pass = $this->input->get('pass');


    if ($email=='juanvs23@gmail.com' and  $pass=='juan123!') {
    	
    	echo "hola tu correo es: " . $email;

    }else {
    	echo 'no eres juan';
    }
    

    
      /*  echo $this->input->post('email'); 
        echo $this->input->post('pass');*/

        

    /*$this->load->view('hey',$email, $pass);*/
}
}

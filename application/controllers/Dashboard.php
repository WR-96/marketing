<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	function __construct()
    {
    	parent::__construct();
        $this->load->model('Dashboard_Model');
        $this->load->helper('form');
        date_default_timezone_set('America/Mexico_City');
    }

	
	public function index()
	{
     
     if($this->session->estatus == TRUE){

     	$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');

     }
     else{
        
        echo  "<script type='text/javascript'>alert('Por favor inice session primero.');window.location.href='".base_url('index.php/Login/index')."'</script>"; 



     }
        
	}



  

  


	public function cerrarSesion()
 	{
	  $this->session->sess_destroy();
	 
	  	header('Location: ../Login/index');

 	}

}

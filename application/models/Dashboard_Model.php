<?php

	class Dashboard_Model extends CI_Model 
	{

    

	    function __construct()
	    {
	        $this->load->database();
	    }


        public function addCampanas($data){


      		$this->db->insert('campania',$data);
      		return $this->db->insert_id();
      

    	}

    	public function selectCampanas()
    	{

    		$querySQL = 'SELECT * FROM campania';
    		return $this->db->query($querySQL)->result();
    		
    	}

        public function addCM($data){
            


            $this->db->insert('usuario',$data);

            


            return $this->db->insert_id();
        }

        public function selectCM()
        {

            $querySQL = 'SELECT * FROM usuario';
            return $this->db->query($querySQL)->result();
            
        }

         public function selectEmpresa()
        {

            $querySQL = 'SELECT * FROM empresa';
            return $this->db->query($querySQL)->result();
            
        }


         public function addEmpresa($data){
            


            $this->db->insert('empresa',$data);

            


            return $this->db->insert_id();
        }


        









 	}
?>
<?php

class Inicio extends CI_Controller
    {
    	function __construct(){
    		parent::__construct();
    		//$this->_is_logued_in();
    		$this->load->helper(array('form', 'url'));
    		//$this->load->model('policia_model');
    		$this->load->model('empresas_model');
			$this->load->library('form_validation');
			$this->load->helper('date'); 
    	}
		function _is_logued_in()
		{
			$is_logued_in = $this->session->userdata('is_logued_in');
			if($is_logued_in != TRUE)
			{
				//echo $is_logued_in;
				redirect('usuarios');
			}	
		}
		function index()
		{
			
				/*$menu = $this->session->userdata('menu');
				$id = $this->session->userdata('id_pol');
                $dato ['policia'] =$this->policia_model->selec_policia($id);  
				$dato['tipo_user'] = $this->session->userdata('tipo_user');*/
				
				
				$dato['title']= "Pagina de Inicio";	
				$dato['error'] = "";
			
				$dato['filas'] = $this->empresas_model->selec_empresas();
			//	$dato['consulta'] = $this->horario_model->selec_horario();	
			
				$this->load->view("inicio/cabecera",$dato);
				//$this->load->view("inicio/$menu",$dato);
				$this->load->view("inicio/tab0");
				$this->load->view("inicio/pie",$dato);
			
			
		}
		function nosotros()
		{
			$dato['title']= "Pagina de Inicio";	
				$dato['error'] = "";
			
				$dato['filas'] = $this->empresas_model->selec_empresas();
			//	$dato['consulta'] = $this->horario_model->selec_horario();	
			
				$this->load->view("inicio/cabecera",$dato);
				//$this->load->view("inicio/$menu",$dato);
				$this->load->view("inicio/tab1");
				$this->load->view("inicio/pie",$dato);
		}
		function servicios()
		{
			$dato['title']= "Pagina de Inicio";	
				$dato['error'] = "";
			
				$dato['filas'] = $this->empresas_model->selec_empresas();
			//	$dato['consulta'] = $this->horario_model->selec_horario();	
			
				$this->load->view("inicio/cabecera",$dato);
				//$this->load->view("inicio/$menu",$dato);
				$this->load->view("inicio/tab2");
				$this->load->view("inicio/pie",$dato);
		}

		function temas()
		{
			$dato['title']= "Pagina de Inicio";	
				$dato['error'] = "";
			
				$dato['filas'] = $this->empresas_model->selec_empresas();
			//	$dato['consulta'] = $this->horario_model->selec_horario();	
			
				$this->load->view("inicio/cabecera",$dato);
				//$this->load->view("inicio/$menu",$dato);
				$this->load->view("inicio/tab3");
				$this->load->view("inicio/pie",$dato);
		}

		function contacto()
		{
			$dato['title']= "Pagina de Inicio";	
				$dato['error'] = "";
				$dato['error2'] = "";
			
				$dato['filas'] = $this->empresas_model->selec_empresas();
			//	$dato['consulta'] = $this->horario_model->selec_horario();	
			
				$this->load->view("inicio/cabecera",$dato);
				//$this->load->view("inicio/$menu",$dato);
				$this->load->view("inicio/tab4",$dato);
				$this->load->view("inicio/pie",$dato);
		}

		function contacto_2()
		{
				$dato['title']= "Pagina de Inicio";	
				$dato['error'] = "El correo electronico es incorrecto...";
				$dato['error2'] = "";
			
				$dato['filas'] = $this->empresas_model->selec_empresas();
			//	$dato['consulta'] = $this->horario_model->selec_horario();	
			
				$this->load->view("inicio/cabecera",$dato);
				//$this->load->view("inicio/$menu",$dato);
				$this->load->view("inicio/tab4",$dato);
				$this->load->view("inicio/pie",$dato);
		}		

		function contacto_3()
		{
			$dato['title']= "Pagina de Inicio";	
				$dato['error'] = "";
				$dato['error2'] = "error no se pudo enviar su consulta ";
			
				$dato['filas'] = $this->empresas_model->selec_empresas();
			//	$dato['consulta'] = $this->horario_model->selec_horario();	
			
				$this->load->view("inicio/cabecera",$dato);
				//$this->load->view("inicio/$menu",$dato);
				$this->load->view("inicio/tab4",$dato);
				$this->load->view("inicio/pie",$dato);
		}
		function contacto_4()
		{
			$dato['title']= "Pagina de Inicio";	
				$dato['error'] = "";
				$dato['error2'] = "Su consulta fue envidad exitosamente...!! ";
			
				$dato['filas'] = $this->empresas_model->selec_empresas();
			//	$dato['consulta'] = $this->horario_model->selec_horario();	
			
				$this->load->view("inicio/cabecera",$dato);
				//$this->load->view("inicio/$menu",$dato);
				$this->load->view("inicio/tab4",$dato);
				$this->load->view("inicio/pie",$dato);
		}
		function error_uno()
		{
			$dato['error'] ="El nombre de usuario o contraseña son incorrectos";	

				
				$dato['title']= "Pagina de Inicio";	
			
				
				$dato['filas'] = $this->empresas_model->selec_empresas();
			//	$dato['consulta'] = $this->horario_model->selec_horario();	
			
				$this->load->view("inicio/cabecera",$dato);
				//$this->load->view("inicio/$menu",$dato);
				$this->load->view("inicio/tab0");
				$this->load->view("inicio/pie",$dato);
			
		}
}
?>
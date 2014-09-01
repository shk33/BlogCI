<?php 

	/**
	* SENDS EMAIL with Gmail
	*/
	class Email extends CI_Controller{
		
	/*	function __construct(){
			parent::CI_Controller();
		}*/

		function index(){
			$this->load->view("newsletter");
		}

		function send(){
			/*echo "hjdsahjkdkjads"; die();*/
	 		 $this->load->library('form_validation');
	 		 //field name, error message, validation rules
	 		 $this->form_validation->set_rules('name','Name','trim|required');
	 		 $this->form_validation->set_rules('email','Email Address','trim|required|valid_email');

	 		 if ($this->form_validation->run() == FALSE) {
	 		 	//Validation Failed
	 		 	$this->load->view('newsletter');
	 		 }else{
	 		 	//Validation Passed
	 		 	$name = $this->input->post('name');
	 		 	$email = $this->input->post('email');

	 		 	$this->load->library('email');
				$this->email->set_newline("\r\n");

				$this->email->from('m.coronel.seg@gmail.com','Miguel Coronel');
				$this->email->to($email);
				$this->email->subject("Bienvenido Sr/Sra $name");
				$this->email->message("Gracias  $name por suscribirte a Newsletter example ");

				if ($this->email->send()) {
					$this->load->view('signup_confirmation');
				}else{
					echo "Not sent email";
				}
	 		}
		}
	}

 ?>
<?php
/**
 *
 */
class Login extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Login_Model');
  }

  function index(){
    $this->load->view('login/login');
  }

  
  function cikis(){
	  $this->session->unset_userdata('y_id');
	  $this->session->unset_userdata('kul_id');
	  $this->session->unset_userdata('yetki');
	  $this->session->unset_userdata('y_okul_id');
	  $this->session->unset_userdata('yetkili');

	  $this->load->view('login/login');
	  
  }
  
  function loginControl(){
    if (isset($_POST['login'])) {
      $this->form_validation->set_rules('username','User Name','required');
      $this->form_validation->set_rules('password','Password','required');

      if ($this->form_validation->run() == TRUE) {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $result = $this->Login_Model->loginControl($username,$password);
		
        if (count($result) > 0 ) {
					  /*
		  echo "conroller icerisi : ";
		  print_r($result);
		  */
		  /*
		  session işlemleri yapılacak
		  gelen id değeri göre yetki ve acenta bilgilerini getirme 
		  */
		  $this->session->set_userdata('y_id', $result->y_id);
		  $this->session->set_userdata('kul_adi', $result->kul_adi);
		  $this->session->set_userdata('yetki', $result->yetki);
		  $this->session->set_userdata('y_okul_id', $result->y_okul_id);
		  $this->session->set_userdata('yetkili', $result->yetkili);
		  /* ----------------------*/
		  
		  /*
		  $data['_view'] = 'dashboard';
		  $this->load->view('layouts/main',$data);
		  */
		  redirect('/', 'refresh');

        }else {
			$data['validation_error'] = "Please check your username or password.";
        $this->load->view('login/login',$data);
		
        //  echo "giriş başarınız";
        }

      }else {
        $data['validation_error'] = "Fill in all fields";
        $this->load->view('login/login',$data);
      }
    }
  }

    /*
    Forgotpassword email sender:
    No view
    */
  public function ForgotPassword()
     {
           $email = $this->input->post('email');
           $findemail = $this->Login_Model->ForgotPassword($email);
           if($findemail){
            $this->Login_Model->sendpassword($findemail);
             }else{
            $this->session->set_flashdata('msg',' Email not found!');
            redirect(base_url().'login','refresh');
        }
     }





}

 ?>

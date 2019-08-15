<?php
class Login_Model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function loginControl($username,$password){
    $this->db->where('kul_adi',$username);
    $this->db->where('kul_pass',$password);
	$this->db->where('onay','2');
    $query = $this->db->get('yonetici');
	$sonuc = $query->row();
	/*
	print_r($sonuc);
	echo "satır sayısı : ".$query->num_rows();
	*/
	
	
    if ($query->num_rows() > 0) {
      return $sonuc;
    }else {
      return 0;
    }
  }
}

 ?>

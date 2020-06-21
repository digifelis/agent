<?php

class Login_Model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function loginControl($username, $password)
    {
        $this->db->where('kul_adi', $username);
        $this->db->where('kul_pass', $password);
        $this->db->where('onay', '2');
        $query = $this->db->get('yonetici');
        $sonuc = $query->row();
        /*
        print_r($sonuc);
        echo "satır sayısı : ".$query->num_rows();
        */


        if ($query->num_rows() > 0) {
            return $sonuc;
        } else {
            return 0;
        }
    }

    function loginControl_count($username, $password)
    {
        $this->db->where('kul_adi', $username);
        $this->db->where('kul_pass', $password);
        $this->db->where('onay', '2');
        $query = $this->db->get('yonetici');
        $sonuc = $query->row();
        return $query->num_rows();
    }


    //funtion to get email of user to send password
    public function ForgotPassword($email)
    {
        $this->db->select('kul_email,kul_adi');
        $this->db->from('yonetici');
        $this->db->where('kul_email', $email);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function sendpassword($data)
    {
        $email = $data['kul_email'];
        $username = $data['kul_adi'];
        $query1 = $this->db->query("SELECT *  from yonetici where kul_email = '" . $email . "' ");
        $row = $query1->result_array();
        if ($query1->num_rows() > 0) {
            $passwordplain = "";
            $passwordplain = rand(999999999, 9999999999);
            $newpass['kul_pass'] = $passwordplain;
            $this->db->where('kul_email', $email);
            $this->db->update('yonetici', $newpass);
            $mail_message = 'Dear ' . $row[0]['yetkili'] . ',' . "\r\n";
            $mail_message .= 'Thanks for contacting regarding to forgot password,<br> Your <b>User Name</b> is  <b>' . $username . '</b> and <b>Password</b> is <b>' . $passwordplain . '</b>' . "\r\n";
            $mail_message .= '<br>Please Update your password.';
            $mail_message .= '<br>Thanks & Regards';
            $mail_message .= '<br>Siirt University - International Students Office';


            $this->load->library('email');
            $config = array();
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_user'] = 'agent@siirt.edu.tr';
            $config['smtp_pass'] = 'qazwsx';
            $config['smtp_port'] = 465;
            $config['charset'] = 'utf-8';
            $this->email->initialize($config);
            $this->email->set_mailtype("html");
            $this->email->set_newline("\r\n");

            $from_email = "agent@siirt.edu.tr";
            $to_email = $email;

            $this->email->from($from_email, 'Siirt University');
            $this->email->to($to_email);
            $this->email->subject('Siirt University - International Students Office');
            $this->email->message($mail_message);
            if (!$this->email->send()) {
                $this->session->set_flashdata('msg', 'Failed to send password, please try again!');
            } else {
                $this->session->set_flashdata('msg', 'Password sent to your email!');
            }

            redirect(base_url() . 'login/', 'refresh');
        } else {
            $this->session->set_flashdata('msg', 'Email not found try again!');
            redirect(base_url() . 'login/', 'refresh');
        }

    }


}


?>

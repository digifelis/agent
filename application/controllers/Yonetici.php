<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Yonetici extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Yonetici_model');
		$this->yetki = $this->session->userdata('yetki');
    } 

    /*
     * Listing of yonetici
     */
    function index()
    {
		if($this->yetki<3) {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('yonetici/index?');
        $config['total_rows'] = $this->Yonetici_model->get_all_yonetici_count();
        $this->pagination->initialize($config);

        $data['yonetici'] = $this->Yonetici_model->get_all_yonetici($params);
        $data['_view'] = 'yonetici/index';
        $this->load->view('layouts/main',$data);
		} else { 		show_error('You must have administrator permission.');			}
    }

    /*
     * Adding a new yonetici
     */
    function add()
    {   
	if($this->yetki<3) {
        $this->load->library('form_validation');

		$this->form_validation->set_rules('kul_adi','User Name','required');
		$this->form_validation->set_rules('kul_pass','User Password','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'onay' => $this->input->post('onay'),
				'kul_adi' => $this->input->post('kul_adi'),
				'kul_pass' => $this->input->post('kul_pass'),
				'yetki' => $this->input->post('yetki'),
				'y_okul_id' => $this->input->post('y_okul_id'),
				'yetkili' => $this->input->post('yetkili'),
				'kul_email' => $this->input->post('kul_email'),
            );
            
            $yonetici_id = $this->Yonetici_model->add_yonetici($params);
            redirect('yonetici/index');
        }
        else
        {
			$this->load->model('Durumlar_model');
			$data['all_durumlar'] = $this->Durumlar_model->get_all_durumlar();
            
			$this->load->model('Acenta_model');
			$data['all_acenta'] = $this->Acenta_model->get_all_acenta();
			
            $data['_view'] = 'yonetici/add';
            $this->load->view('layouts/main',$data);
        }
		} else { 		show_error('You must have administrator permission.');			}
    }  

    /*
     * Editing a yonetici
     */
    function edit($y_id)
    {   
        // check if the yonetici exists before trying to edit it
        $data['yonetici'] = $this->Yonetici_model->get_yonetici($y_id);
        if($this->yetki<3) {
        if(isset($data['yonetici']['y_id']))
        {
            $this->load->library('form_validation');

		$this->form_validation->set_rules('kul_adi','User Name','required');
		$this->form_validation->set_rules('kul_pass','User Password','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'onay' => $this->input->post('onay'),
					'kul_adi' => $this->input->post('kul_adi'),
					'kul_pass' => $this->input->post('kul_pass'),
					'yetki' => $this->input->post('yetki'),
					'y_okul_id' => $this->input->post('y_okul_id'),
					'yetkili' => $this->input->post('yetkili'),
					'kul_email' => $this->input->post('kul_email'),
					
					
                );

                $this->Yonetici_model->update_yonetici($y_id,$params);            
                redirect('yonetici/index');
            }
            else
            {
				$this->load->model('Durumlar_model');
				$data['all_durumlar'] = $this->Durumlar_model->get_all_durumlar();

				$this->load->model('Acenta_model');
				$data['all_acenta'] = $this->Acenta_model->get_all_acenta();
				
                $data['_view'] = 'yonetici/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
		} else { 		show_error('You must have administrator permission.');			}
    }
}

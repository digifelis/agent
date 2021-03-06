<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Ogrenci_durum extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ogrenci_durum_model');
				$this->yetki = $this->session->userdata('yetki');
		if($this->yetki<3) { } else { 		show_error('You must have administrator permission.');			}
    } 

    /*
     * Listing of ogrenci_durum
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('ogrenci_durum/index?');
        $config['total_rows'] = $this->Ogrenci_durum_model->get_all_ogrenci_durum_count();
        $this->pagination->initialize($config);

        $data['ogrenci_durum'] = $this->Ogrenci_durum_model->get_all_ogrenci_durum($params);
        
        $data['_view'] = 'ogrenci_durum/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new ogrenci_durum
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'ogrenci_durum_adi' => $this->input->post('ogrenci_durum_adi'),
            );
            
            $ogrenci_durum_id = $this->Ogrenci_durum_model->add_ogrenci_durum($params);
            redirect('ogrenci_durum/index');
        }
        else
        {            
            $data['_view'] = 'ogrenci_durum/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a ogrenci_durum
     */
    function edit($oogrenci_durum_id)
    {   
        // check if the ogrenci_durum exists before trying to edit it
        $data['ogrenci_durum'] = $this->Ogrenci_durum_model->get_ogrenci_durum($oogrenci_durum_id);
        
        if(isset($data['ogrenci_durum']['oogrenci_durum_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'ogrenci_durum_adi' => $this->input->post('ogrenci_durum_adi'),
                );

                $this->Ogrenci_durum_model->update_ogrenci_durum($oogrenci_durum_id,$params);            
                redirect('ogrenci_durum/index');
            }
            else
            {
                $data['_view'] = 'ogrenci_durum/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The Student Status you are trying to edit does not exist.');
    }
}
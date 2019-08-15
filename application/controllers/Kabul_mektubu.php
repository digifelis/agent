<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Kabul_mektubu extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kabul_mektubu_model');
    } 

    /*
     * Listing of kabul_mektubu
     */
    function index()
    {
        $data['kabul_mektubu'] = $this->Kabul_mektubu_model->get_all_kabul_mektubu();
        
        $data['_view'] = 'kabul_mektubu/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new kabul_mektubu
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'o_id' => $this->input->post('o_id'),
				'mektup' => $this->input->post('mektup'),
            );
            
            $kabul_mektubu_id = $this->Kabul_mektubu_model->add_kabul_mektubu($params);
            redirect('kabul_mektubu/index');
        }
        else
        {
			$this->load->model('Ogrenci_model');
			$data['all_ogrenci'] = $this->Ogrenci_model->get_all_ogrenci();
            
            $data['_view'] = 'kabul_mektubu/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a kabul_mektubu
     */
    function edit($kabul_id)
    {   
        // check if the kabul_mektubu exists before trying to edit it
        $data['kabul_mektubu'] = $this->Kabul_mektubu_model->get_kabul_mektubu($kabul_id);
        
        if(isset($data['kabul_mektubu']['kabul_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'o_id' => $this->input->post('o_id'),
					'mektup' => $this->input->post('mektup'),
                );

                $this->Kabul_mektubu_model->update_kabul_mektubu($kabul_id,$params);            
                redirect('kabul_mektubu/index');
            }
            else
            {
				$this->load->model('Ogrenci_model');
				$data['all_ogrenci'] = $this->Ogrenci_model->get_all_ogrenci();

                $data['_view'] = 'kabul_mektubu/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The Acception Letter you are trying to edit does not exist.');
    } 

    /*
     * Deleting kabul_mektubu
     */
    function remove($kabul_id)
    {
        $kabul_mektubu = $this->Kabul_mektubu_model->get_kabul_mektubu($kabul_id);

        // check if the kabul_mektubu exists before trying to delete it
        if(isset($kabul_mektubu['kabul_id']))
        {
            $this->Kabul_mektubu_model->delete_kabul_mektubu($kabul_id);
            redirect('kabul_mektubu/index');
        }
        else
            show_error('The Acception Letter you are trying to delete does not exist.');
    }
    
}

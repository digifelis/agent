<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Bolum_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get bolum by bolum_id
     */
    function get_bolum($bolum_id)
    {
        return $this->db->get_where('bolum',array('bolum_id'=>$bolum_id))->row_array();
    }
    
    /*
     * Get all bolum count
     */
    function get_all_bolum_count()
    {
        $this->db->from('bolum');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all bolum
     */
    function get_all_bolum($params = array())
    {
            if($params['arsiv'] == 2 or $params['arsiv'] == ''){
    		    $this->db->where('bolum_durum', 2);
    		} else {
    		    $this->db->where('bolum_durum', 1);
    		}

        $this->db->order_by('bolum_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('bolum')->result_array();
    }
        
    /*
     * function to add new bolum
     */
    function add_bolum($params)
    {
        $this->db->insert('bolum',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update bolum
     */
    function update_bolum($bolum_id,$params)
    {
        $this->db->where('bolum_id',$bolum_id);
        return $this->db->update('bolum',$params);
    }
    
    /*
     * function to delete bolum
     */
    function delete_bolum($bolum_id)
    {
        return $this->db->delete('bolum',array('bolum_id'=>$bolum_id));
    }
}

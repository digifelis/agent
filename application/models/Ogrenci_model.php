 <?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Ogrenci_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
		$this->tableName = 'files';
		$this->y_okul_id = $this->session->userdata('y_okul_id');
		$this->zaman = date('Y-m-d H:i:s');
    }

	function yetki_kontrol($ogrenci , $ajans , $yetki) {
		/* gelen öğrenci numarasına göre ajansın o öğrenici üzerinde yetkisini kontrol ediyoruz. */
		$this->db->select('a_id');
		$this->db->from('ogrenci');
		$this->db->where('ogrenci_id',$ogrenci);
		$query = $this->db->get();
		$sonuc = $query->row();	
		if($yetki < 3) { return 1;} 
		elseif($sonuc->a_id == $ajans) { return 1;} else { return 0;}
	}
/* pasaport no kontrol */
function pasaport_kontrol($ps_no) {
	$this->db->where('pasaport_no' , $ps_no);
	$this->db->from('ogrenci');
	$query = $this->db->get();
	if($query->num_rows() > 0 ) { return TRUE; } else { return FALSE;}
}
 /* kabul dosyasının bilgisini getirme */
 function kabul_dosya_bilgisi($ogrenci_id)
 {
	 $query = $this->db->query('SELECT * FROM files where tipi = "2" and o_id = "'.$ogrenci_id.'" ');
	 if($query->num_rows() != 0) {
		$this->db->select('file_name');
		$this->db->from('files');
		$this->db->where('o_id',$ogrenci_id);
		$this->db->where('tipi' , '2');
		$query = $this->db->get();
		$sonuc = $query->row();
		$bos_dosya = $sonuc->file_name;
			} else {
		$bos_dosya = 'Belge1.pdf';
			}
		//return 'Belge1.pdf';
		return $bos_dosya;	
 }
    /*
     * Get ogrenci by ogrenci_id
     */
    function get_ogrenci($ogrenci_id)
    {
        return $this->db->get_where('ogrenci',array('ogrenci_id'=>$ogrenci_id))->row_array();
    }
    /*
     * Get ogrenci by ogrenci_id
     */
    function get_ogrenci_acenta($ogrenci_id)
    {
        return $this->db->get_where('ogrenci',array('ogrenci_id'=>$ogrenci_id , 'a_id' => $this->y_okul_id))->row_array();
    }    
    /*
     * Get all ogrenci count
     */
    function get_all_ogrenci_count()
    {
		
        $this->db->from('ogrenci');
	//	$y_okul_id = $this->session->userdata('y_okul_id');
	        if(isset($params) && !empty($params))
        {
			if($params['kelime'] != "") {$this->db->like($params['kriter'], $params['kelime'] , 'both');}
        }
		
		if($this->y_okul_id != 0) { $this->db->where('a_id' , $this->y_okul_id);}
        return $this->db->count_all_results();
    }

    /*
     * Get all fakülte count
     */
    function get_all_fakulte_count($seviye = '')
    {
		
        $this->db->from('fakulte');
		if($seviye != '') { $this->db->where('seviye' , $seviye);}
	//	$y_okul_id = $this->session->userdata('y_okul_id');
        return $this->db->count_all_results();
    }

    /*
     * Get all bolum count
     */
    function get_all_bolum_count($fakulte_id)
    {
		
        $this->db->from('bolum');
		$this->db->where('bolum_durum','2');
		$this->db->where('f_id', $fakulte_id);
		$this->db->where('bolum_durum', 2 );
	//	$y_okul_id = $this->session->userdata('y_okul_id');
        return $this->db->count_all_results();
    }

	/* tercih yapmışmı kontrol */
	function tercih_kontrol($ogrenci_id)
	{
	    $this->db->from('ogrenci_secimi');
		$this->db->where('o_id',$ogrenci_id);
	//	$y_okul_id = $this->session->userdata('y_okul_id');
        return $this->db->count_all_results();	
		
	}
	/* öğrencinin tercih listesi */
	function tercih_liste($ogrenci_id) {
		$query = $this->db->query('select id,fakulte_adi,bolum_adi,egitim_dili,ucreti,zaman from ogrenci_secimi,fakulte,bolum where fakulte.fakulte_id=ogrenci_secimi.f_id and bolum.bolum_id=ogrenci_secimi.b_id and ogrenci_secimi.o_id='.$ogrenci_id);
		return $query->result_array();
	}
	/* evrak yüklemişmi kontrol */
	function evrak_kontrol($ogrenci_id)
	{
	    $this->db->from('files');
		$this->db->where('o_id',$ogrenci_id);
		$this->db->where('tipi','1');
	//	$y_okul_id = $this->session->userdata('y_okul_id');
        return $this->db->count_all_results();	
		
	}	
    /*
     * Get all ogrenci
     */
    function get_all_ogrenci($params = array())
    {
        $this->db->order_by('ogrenci_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
			if($params['kelime'] != "") {$this->db->like($params['kriter'], $params['kelime'] , 'both');}
        }
	//	$y_okul_id = $this->session->userdata('y_okul_id');
		$this->db->where('arsiv' , $params['arsiv']);
		if($this->y_okul_id != 0) { $this->db->where('a_id' , $this->y_okul_id);}
		
        return $this->db->get('ogrenci')->result_array();
    }
    /*
     * Get all fakulte
     */
    function get_all_fakulte($params = array())
    {
        $this->db->order_by('fakulte_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
			if($params['seviye'] != '') { $this->db->where('seviye',$params['seviye']); }
        }
	//	$y_okul_id = $this->session->userdata('y_okul_id');
        return $this->db->get('fakulte')->result_array();
    }

    /*
     * Get all belge_tipi
     */
    function get_all_belge_tipi()
    {
        $this->db->order_by('id', 'asc');
		$this->db->where('durum','1');
        return $this->db->get('belge_tipi')->result_array();
    }
	
	    /*
     * Get all belge_tipi
     */
    function get_belge_tipi($params)
    {
		/*
		$this->db->select('belge_adi');
		$this->db->where('id',$params);
        return $this->db->get('belge_tipi')->row();
		*/
		$query = $this->db->query('select belge_adi from belge_tipi where id='.$params);
		$row = $query->row();
		return $row->belge_adi;

    }
	
    /*
     * Get all bolum
     */
    function get_all_bolum($params = array() , $fakulte_id)
    {
        $this->db->order_by('bolum_id', 'desc');
		$this->db->where('f_id',$fakulte_id);

        $this->db->where('bolum_durum', 2);
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
	//	$y_okul_id = $this->session->userdata('y_okul_id');
        return $this->db->get('bolum')->result_array();
    }
    /*
    * bolum kapalı mı bolum durumu döndürür
    */
    function bolum_durum($bolum_id) {
    $this->db->where('bolum_id', $bolum_id);
    $sonuc = $this->db->get('bolum')->result_array();
    return $sonuc[0]['bolum_durum'];


    }
    /* get all durumlar */
      function get_all_durumlar($params)
    {
        $this->db->order_by('oogrenci_durum_id', 'desc');
		$this->db->where('oogrenci_durum_id' , $params);
        return $this->db->get('ogrenci_durum')->result_array();
    }
	 /* get all acenta */
      function get_all_acenta($params)
    {
        $this->db->order_by('acenta_id', 'desc');
		$this->db->where('acenta_id' , $params);
        return $this->db->get('acenta')->result_array();
    }  
	 /* get all acenta */
      function get_all_ulke($params)
    {
        $this->db->order_by('ulke_id', 'desc');
		$this->db->where('ulke_id' , $params);
        return $this->db->get('ulkeler')->result_array();
    }  
	
    /*
     * function to add new ogrenci
     */
    function add_ogrenci($params)
    {
        $this->db->insert('ogrenci',$params);
		$ogrenci_id = $this->db->insert_id();
		
        return $ogrenci_id;
    }
/* sürec ekle */
function surec_ekle($ogrenci_id,$mesaj)
{
	$params = array(
							'o_id' => $ogrenci_id,
							'a_id' => $this->y_okul_id,
							'islem' => $mesaj,
							'zaman' => $this->zaman,
							
							);
	$this->db->insert('basvuru_surec',$params);
	
}
    /*
     * function to add new ogrenci
     */
    function add_tercih($params)
    {
        $this->db->insert('ogrenci_secimi',$params);
		$ogrenci_id = $this->db->insert_id();
        return $ogrenci_id;
    }

    /*
     * function to update ogrenci
     */
    function update_ogrenci($ogrenci_id,$params)
    {
        $this->db->where('ogrenci_id',$ogrenci_id);
        return $this->db->update('ogrenci',$params);
    }
    
    /*
     * function to delete ogrenci
     */
    function delete_ogrenci($ogrenci_id)
    {
        return $this->db->delete('ogrenci',array('ogrenci_id'=>$ogrenci_id));
    }
	
	
	
	/////////////////////////////////////////////////////////////
	    public function getRows($ogr_id){
        $this->db->select('id,file_name,uploaded_on,o_id,belge_tipi');
        $this->db->from('files');
			$this->db->where('o_id',$ogr_id);
			$this->db->where('tipi','1');
            $query = $this->db->get();
            $result = $query->result_array();
		

        return !empty($result)?$result:false;
    }
    
    /*
     * Insert file data into the database
     * @param array the data for inserting into the table
     */
    public function insert($data = array() ){
		$this->db->select('a_id');
		$this->db->from('ogrenci');
		$this->db->where('ogrenci_id',$data[0]['o_id']);
		$query = $this->db->get();
		$sonuc = $query->row();

		
		//if($this->Ogrenci_model->yetki_kontrol($data[0]['o_id'] , $ekbilgi) == 1) {
		$insert = $this->db->insert_batch('files',$data);
		//}
		
        return $insert?true:false;
    }
	
		/////////////////////////////////////////////////////////////
	    public function getRows_kabul($ogr_id){
        $this->db->select('id,file_name,uploaded_on,o_id');
        $this->db->from('files');
			$this->db->where('o_id',$ogr_id);
			$this->db->where('tipi','2');
            $query = $this->db->get();
            $result = $query->result_array();
		

        return !empty($result)?$result:false;
    }
	
	
}

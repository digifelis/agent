<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Student Listing</h3>
				<br>
                
                <?php if($this->uri->segment("3") != "") { ?>
                <div class="col-md-10">
          <div class="box box-danger box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Attention</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              				<?php 
					if($this->uri->segment("3")==1) { echo 'Applicaiton is completed succesfully<br>';}
					if($this->uri->segment("3")==2) { echo 'Application is submitted previously<br>';}
					if($this->uri->segment("3")==3) { echo 'Appication can not be completed without uploading Documents <br>';}
					if($this->uri->segment("3")==4) { echo 'Applicaiton can not be completed without Program Selection<br>';}
				?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <?php } ?>

            	<div class="box-tools">
<?php
$y_okul_id = $this->session->userdata('y_okul_id');				
$yetki = $this->session->userdata('yetki');
//echo "yetki : ". $yetki."<br>";
if($yetki == 3) { ?>
<a href="<?php echo site_url('ogrenci/acenta_add'); ?>" class="btn btn-success btn-sm">Add</a> 

<?php } else { ?>
<a href="<?php echo site_url('ogrenci/add'); ?>" class="btn btn-success btn-sm">Add</a> 
<?php } ?>
				  
                </div>
				
<form name="arama" action="" method="get">
<input type="text" name="kelime" value="<?php echo $kelime; ?>" >

 <select name="kriter" >
    <option value="adi_soyadi" >Name Surname</option>
    <option value="pasaport_no" >Passaport Number</option>
  </select>
  
  <input type="submit" value="Find">
  
  
</form>
				
				
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Student Id</th>
						<?php if($yetki < 3) { ?>
						<th>Country</th>
						<th>Agent Name</th>
						<?php } ?>
						<th>Status</th>
						<th>Name Surname</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($ogrenci as $o){ ?>
        <?php
	$durum_adi = $this->Ogrenci_model->get_all_durumlar($o['durum']);
	$acenta_adi = $this->Ogrenci_model->get_all_acenta($o['a_id']);
	//$ulke_adi = $this->Ogrenci_model->get_all_ulke($acenta_adi[0]['ulke']);
	$ulke_adi = $this->Ogrenci_model->get_all_ulke($o['ulke']);
		?>
                    <tr>
						<td><?php echo $o['ogrenci_id']; ?></td>
						<?php if($yetki < 3) { ?>
						<td><?php 
						//echo $ulke_adi[0]['ulke_adi'];
						if(isset($ulke_adi[0]['ulke_adi'])) { echo $ulke_adi[0]['ulke_adi']; }
						?></td>
						<td><?php 
						if(isset($acenta_adi[0]['adi'])) { echo /*$o['a_id']*/ $acenta_adi[0]['adi']; } ?></td>
							<?php } ?>
						<td><?php echo /*$o['durum'] .*/ $durum_adi[0]['ogrenci_durum_adi']; ?></td>
						<td><?php echo $o['adi_soyadi']; ?></td>
						<td>
						<?php if($yetki == 3) { 
						if($o['durum'] == 1 or $o['durum'] == 5  or $o['durum'] == 7 or $o['durum'] == 8) {
						?>
                            <a href="<?php echo site_url('ogrenci/acenta_edit/'.$o['ogrenci_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
						<?php 
						} else {
								?>
						<a href="<?php echo site_url('ogrenci/acenta_goruntuleme/'.$o['ogrenci_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> View</a> 
								<?php
						}
						} else { 
						//if($o['durum'] != 2 or $o['durum'] != 3) { 
						
						?> 
						    <a href="<?php echo site_url('ogrenci/edit/'.$o['ogrenci_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
						<?php } 
						if($o['durum'] == 1 or $o['durum'] == 5  or $o['durum'] == 7 or $o['durum'] == 8) {
						?>
						  <a href="<?php echo site_url('ogrenci/remove/'.$o['ogrenci_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a> 
					<?php } ?>
                         <!--   <a href="<?php echo site_url('evraklar/ogrenci_evrak/'.$o['ogrenci_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Evraklar</a> -->

<!--
tercih yapmamaışsa evrak yükle ve tercih yap görünecek
tercih yapmışsa birşey görünmeyecek
kabul almışsa kabul mektubu görünecek
red almışsa yükle ve tercih yap görünecek
-->
<?php
if($o['durum'] == 1 or $o['durum'] == 5  or $o['durum'] == 7 or $o['durum'] == 8) 
	{ 
?>
		<a href="<?php echo site_url('ogrenci/dosya_yukle/'.$o['ogrenci_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Documents Upload</a>
		<!--<a href="<?php echo site_url('ogrenci/fakulte_sec/'.$o['ogrenci_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-address-card-o"></span> Tercih Yap</a> -->
        <a href="<?php echo site_url('ogrenci/seviye_sec/'.$o['ogrenci_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-address-card-o"></span> Select Program</a>
<?php 
 } else {
	 if($yetki < 3 ) {
		 ?>
		 <a href="<?php echo site_url('ogrenci/dosya_yukle/'.$o['ogrenci_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Documents Upload</a>
		 <a href="<?php echo site_url('ogrenci/seviye_sec/'.$o['ogrenci_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-address-card-o"></span> Select Program</a>
	<?php 
	 }
 }
/* tercih durumun kontrol et */
$tercih_durum = $this->Ogrenci_model->tercih_kontrol($o['ogrenci_id']);
if($tercih_durum>0) { //echo 'tercih yapmışsa birşey görünmeyecek';
}

/* kabul almışsa kabul mektubunu indir */
if($o['durum'] == 3) 
	{
		$kabul_dosya_adi = $this->Ogrenci_model->kabul_dosya_bilgisi($o['ogrenci_id']);
?>
<a href="<?php echo base_url('uploads/files/'.$kabul_dosya_adi); ?>" target="_blank" class="label label-warning">Download Acception Letter</a> 
<?php 	} ?>

                          
<?php if($yetki < 3) { ?>

<a href="<?php echo site_url('ogrenci/kabul_yukle/'.$o['ogrenci_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Acception Letter</a>
                           
<?php } ?>

<?php if($o['durum'] == 1 or $o['durum'] == 5  or $o['durum'] == 7 or $o['durum'] == 8) {  ?>							
   <a href="<?php echo site_url('ogrenci/onaya_yolla/'.$o['ogrenci_id']); ?>" class="btn btn-warning btn-xs"><span class="fa fa-warning"></span> Sent for Approval</a> 
<?php } ?> 

 <a href="<?php echo site_url('ogrenci/surec_bilgisi/'.$o['ogrenci_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-flag-o"></span> Status Info</a>                           
                        

                   
						</td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>

<?php

function timeConvert ( $zaman ){
	$zaman =  strtotime($zaman);
	$zaman_farki = time() - $zaman;
	$saniye = $zaman_farki;
	$dakika = round($zaman_farki/60);
	$saat = round($zaman_farki/3600);
	$gun = round($zaman_farki/86400);
	$hafta = round($zaman_farki/604800);
	$ay = round($zaman_farki/2419200);
	$yil = round($zaman_farki/29030400);
	if( $saniye < 60 ){
		if ($saniye == 0){
			return "shortly before";
		} else {
			return ' <small class="label label-danger"><i class="fa fa-clock-o"></i>'.$saniye.' second </small>';
		}
	} else if ( $dakika < 60 ){
		return ' <small class="label label-danger"><i class="fa fa-clock-o"></i>'.$dakika.' minute </small>';
	} else if ( $saat < 24 ){
		return ' <small class="label label-info"><i class="fa fa-clock-o"></i> '.$saat.' hours</small>';
	} else if ( $gun < 7 ){
		return ' <small class="label label-warning"><i class="fa fa-clock-o"></i>'.$saat.' days</small>';
	} else if ( $hafta < 4 ){
		return '<small class="label label-primary"><i class="fa fa-clock-o"></i> '.$hafta.' week</small>';
	} else if ( $ay < 12 ){
		return $ay .' month ago';
		return ' <small class="label label-default"><i class="fa fa-clock-o"></i> '.$ay.' month</small>';
	} else {
		return ' <small class="label label-default"><i class="fa fa-clock-o"></i> '.$yil.' month</small>';
	}
}

?>



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


<?php
if ($this->input->get('arsiv') == "" or $this->input->get('arsiv') == 0) {

?>
<div class="box-tools">
	<form name="arama" action="" method="get">
	<input type="hidden" name="arsiv" value="1">	  
	  <input type="submit" value="Get Archived Records" class="btn btn-success btn-sm">
	</form>
</div>
<?php } else {
	?>
<div class="box-tools">
	<form name="arama" action="" method="get">
	<input type="hidden" name="arsiv" value="0">	  
	  <input type="submit" value="Get Active Records" class="btn btn-success btn-sm">
	</form>
</div>	
<?php } ?>


	  
                </div>



<form class="form-inline" action="" method="get">
<input type="hidden" name="arsiv" value="<?php echo $this->input->get('arsiv'); ?>">
        <select class="form-control" name="kriter">
            <option selected="selected" disabled="disabled" value="">Filter By</option>
            <option value="adi_soyadi">Name Surname</option>
            <option value="pasaport_no">Passaport No</option>
            <option value="ogrenci_id">Student ID</option>

        </select>
        <input class="form-control" type="text" name="kelime" value="" placeholder="Search...">
        <input class="btn btn-default" type="submit" name="filter" value="Find">
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
						<!--  <a href="<?php echo site_url('ogrenci/remove/'.$o['ogrenci_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>  -->

						  <!-- silme popup başlangıcı -->

						    <div class="modal fade" id="confirm-delete1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">

                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                               <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                                           </div>

                                           <div class="modal-body">
                                               <p>You are about to Delete Record</p>
                                               <p>Do you want to proceed?</p>

                                           </div>

                                           <div class="modal-footer">
                                               <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                               <a class="btn btn-danger btn-ok">Delete</a>
                                           </div>
                                       </div>
                                   </div>
                               </div>


                            <button class="btn btn-danger btn-xs" data-href="<?php echo site_url('ogrenci/remove/'.$o['ogrenci_id']); ?>" data-toggle="modal" data-target="#confirm-delete1">
                                   <span class="fa fa-trash"></span> Delete
                              </button>
                             <!-- silme popup bitimi -->


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

 <!-- <a href="<?php echo site_url('ogrenci/surec_bilgisi/'.$o['ogrenci_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-flag-o"></span> Status Info</a>  -->
 
 <?php if($yetki < 3) { ?>
 <!--
<a href="<?php echo site_url('ogrenci/arsiv_yap/'.$o['ogrenci_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> <?php if ($o['arsiv']==0) { echo "Sent To Archive";} else { echo "Sent To Active";} ?></a>
-->


  <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirm <?php if ($o['arsiv']==0) { echo "Sent To Archive";} else { echo "Sent To Active";} ?></h4>
                </div>

                <div class="modal-body">
                    <p>You are about to <?php if ($o['arsiv']==0) { echo "Sent To Archive";} else { echo "Sent To Active";} ?></p>
                    <p>Do you want to proceed?</p>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-ok"><?php if ($o['arsiv']==0) { echo "Sent To Archive";} else { echo "Sent To Active";} ?></a>
                </div>
            </div>
        </div>
    </div>


  <button class="btn btn-info btn-xs" data-href="<?php echo site_url('ogrenci/arsiv_yap/'.$o['ogrenci_id']); ?>" data-toggle="modal" data-target="#confirm-delete">
         <?php if ($o['arsiv']==0) { echo "Sent To Archive";} else { echo "Sent To Active";} ?>
    </button>


<?php } ?>                       

<!-- popup açma başlangıcı -->
 <!-- Button trigger modal -->
 <button class="btn btn-info btn-xs" data-toggle = "modal" data-target = "#myModal<?php echo $o['ogrenci_id']; ?>">
    Status Info
 </button>


 <!-- Modal -->
 <div class = "modal fade" id = "myModal<?php echo $o['ogrenci_id']; ?>" tabindex = "-1" role = "dialog"
    aria-labelledby = "myModalLabel" aria-hidden = "true">

    <div class = "modal-dialog">
       <div class = "modal-content">






 <div class="box box-primary" style="position: relative; left: 0px; top: 0px;">
   <div class="box-header ui-sortable-handle" style="cursor: move;">
               <i class="ion ion-clipboard"></i>

     <h3 class="box-title">Recent Activities in Student Application Process</h3>
            </div>
             <!-- /.box-header -->
   <div class="box-body">
               <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
               <ul class="todo-list ui-sortable">
               <?php
               		if($this->y_okul_id != 0) {
               		$query = $this->db->query('SELECT * FROM basvuru_surec where o_id = "'.$o['ogrenci_id'].'" and a_id="'.$this->y_okul_id.'" order by surec_id desc');
               		} else {
               		$query = $this->db->query('SELECT * FROM basvuru_surec where o_id = "'.$o['ogrenci_id'].'" order by surec_id desc');
               		}
               		$surec = $query->result_array();

  foreach($surec as $src) {
 	 ?>
                 <li>
                   <!-- drag handle -->
                   <span class="handle ui-sortable-handle">
                         <i class="fa fa-ellipsis-v"></i>
                         <i class="fa fa-ellipsis-v"></i>
                       </span>
                   <!-- checkbox --><!-- todo text -->
                   <span class="text"><?php echo 'In-student student '.$o['adi_soyadi'].'  '.$src['islem']; ?></span>
                   <!-- Emphasis label -->

 				  <?php

 				  $tarih = $src['zaman'];
 				  echo timeConvert($tarih);

 				   ?>

                   <!-- General tools such as edit or delete-->
                   <div class="tools">
                     <i class="fa fa-edit"></i>
                     <i class="fa fa-trash-o"></i>
                   </div>
                 </li>

               <?php } ?>

               </ul>
            </div>
           <!-- /.box-body --></div>



          <div class = "modal-footer">
             <button type = "button" class = "btn btn-default" data-dismiss = "modal">
                Close
             </button>
            <!--
             <button type = "button" class = "btn btn-primary">
                Submit changes
             </button>
             -->
          </div>

       </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

 </div><!-- /.modal -->
 <!-- popup açma sonu -->

						</td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php
                    $config = array();
                    $config['reuse_query_string'] = true;
                    $this->pagination->initialize($config);
                    echo $this->pagination->create_links();
                    ?>
                </div>                
            </div>
        </div>
    </div>
</div>


 <script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script data-require="bootstrap@*" data-semver="3.1.1" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link data-require="bootstrap-css@3.1.1" data-semver="3.1.1" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />


    <script>
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

            $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
        });



        $('#confirm-delete1').on('show.bs.modal', function(e) {
                    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

                    $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
                });

    </script>
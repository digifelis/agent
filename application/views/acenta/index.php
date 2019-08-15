<?php 
$yetki = $this->session->userdata('yetki');
if($yetki<3) { 
?> 
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Agent Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('acenta/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Agent Id</th>
						<!--<th>Ulke</th> -->
						<!--<th>Durum</th> -->
					<!--	<th>Acenta Parola</th> -->
						<th>Agent Name</th>
						<th>Agent Country</th> 
						<th>City</th>
						<th>Phone Number</th>
						<th>Email</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($acenta as $a){ ?>
                    <tr>
						<td><?php echo $a['acenta_id']; ?></td>
						<!--<td><?php echo $a['ulke']; ?></td> -->
						<!--<td><?php echo $a['durum']; ?></td> -->
					<!--	<td><?php echo $a['acenta_parola']; ?></td> -->
						<td><?php echo $a['adi']; ?></td>
						<td>
						<?php 
						$ulke_adi = $this->Ogrenci_model->get_all_ulke($a['ulke']);
						if(isset($ulke_adi[0]['ulke_adi'])) { echo $ulke_adi[0]['ulke_adi']; }
						
						?>
						</td> 
						<td><?php echo $a['sehir']; ?></td>
						<td><?php echo $a['tel1']; ?></td>
						<td><?php echo $a['mail']; ?></td> 
						<td>
                            <a href="<?php echo site_url('acenta/edit/'.$a['acenta_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                        <!--    <a href="<?php echo site_url('acenta/remove/'.$a['acenta_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a> -->
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
<?php } ?>

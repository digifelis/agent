<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Student Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('ogrenci/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Student Id</th>
						<th>Agent Name</th>
						<th>Status</th>
						<th>Name Surname</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($ogrenci as $o){ ?>
                                            	<?php
	$durum_adi = $this->Ogrenci_model->get_all_durumlar($o['durum']);
	$acenta_adi = $this->Ogrenci_model->get_all_acenta($o['a_id']);
	?>
                    <tr>
						<td><?php echo $o['ogrenci_id']; ?></td>
						<td><?php echo /*$o['a_id']*/ $acenta_adi[0]['adi']; ?></td>

						<td><?php echo /*$o['durum']*/ $durum_adi[0]['ogrenci_durum_adi']; ?></td>
						<td><?php echo $o['adi_soyadi']; ?></td>
						<td>
                            <a href="<?php echo site_url('ogrenci/edit/'.$o['ogrenci_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <!--<a href="<?php echo site_url('ogrenci/remove/'.$o['ogrenci_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a> -->
                         <!--   <a href="<?php echo site_url('evraklar/ogrenci_evrak/'.$o['ogrenci_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Evraklar</a> -->
                            <a href="<?php echo site_url('ogrenci/kabul_yukle/'.$o['ogrenci_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Acception Letter</a>
                            <a href="<?php echo site_url('ogrenci/dosya_yukle/'.$o['ogrenci_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Document Upload</a>
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

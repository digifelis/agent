<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">User Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('yonetici/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>User Id</th>
						<th>Status</th>
						<th>User Name</th>
						<th>Authorized Name</th>
						<th>Email</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($yonetici as $y){ ?>
                    <tr>
						<td><?php echo $y['y_id']; ?></td>
                        <?php	
						 
						$durum_adi = $this->Yonetici_model->get_all_durumlar($y['onay']);
						
						?>
						<td><?php echo /*$y['onay'] ."--". */$durum_adi[0]['durum_adi']; ?></td>
						<td><?php echo $y['kul_adi']; ?></td>
						<td><?php echo $y['yetkili']; ?></td>
						<td><?php echo $y['kul_email']; ?></td>
						<td>
                            <a href="<?php echo site_url('yonetici/edit/'.$y['y_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                        <!--    <a href="<?php echo site_url('yonetici/remove/'.$y['y_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a> -->
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

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Faculty Listing</h3>
            	<div class="box-tools">

				  
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Faculty Id</th>
						<th>Faculty Name</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($fakulte as $o){ ?>

                    <tr>
						<td><?php echo $o['fakulte_id']; ?></td>
						<td><?php echo $o['fakulte_adi']; ?></td>
						<td>
							<a href="<?php echo site_url('ogrenci/bolum_sec/'.$this->uri->segment("3").'/'.$o['fakulte_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-address-card-o"></span> Select Program</a>
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

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Program Listing</h3>
            	<div class="box-tools">

				  
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Faculty Id</th>
						<th>Program Name</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($bolum as $o){ ?>

                    <tr>
						<td><?php echo $o['bolum_id']; ?></td>
						<td><?php echo $o['bolum_adi']; ?></td>
						<td>
							<a href="<?php echo site_url('bolum/katalog_detay/'.$o['bolum_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-address-card-o"></span> Show Informaiton</a>
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

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Country Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('ulkeler/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Country Id</th>
						<th>Country Name</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($ulkeler as $u){ ?>
                    <tr>
						<td><?php echo $u['ulke_id']; ?></td>
						<td><?php echo $u['ulke_adi']; ?></td>
						<td>
                            <a href="<?php echo site_url('ulkeler/edit/'.$u['ulke_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('ulkeler/remove/'.$u['ulke_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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

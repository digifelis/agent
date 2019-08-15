<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Faculty Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('fakulte/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Faculty Id</th>
						<th>Faculty Name</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($fakulte as $f){ ?>
                    <tr>
						<td><?php echo $f['fakulte_id']; ?></td>
						<td><?php echo $f['fakulte_adi']; ?></td>
						<td>
                            <a href="<?php echo site_url('fakulte/edit/'.$f['fakulte_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('fakulte/remove/'.$f['fakulte_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

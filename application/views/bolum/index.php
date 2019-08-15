<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Program Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('bolum/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Program Id</th>
						<th>Faculty Id</th>
						<th>Program Status</th>
						<th>Program Name</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($bolum as $b){ ?>
                    <tr>
						<td><?php echo $b['bolum_id']; ?></td>
						<td><?php echo $b['f_id']; ?></td>
						<td><?php echo $b['bolum_durum']; ?></td>
						<td><?php echo $b['bolum_adi']; ?></td>
						<td>
                            <a href="<?php echo site_url('bolum/edit/'.$b['bolum_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('bolum/remove/'.$b['bolum_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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

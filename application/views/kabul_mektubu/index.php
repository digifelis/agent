<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Acceptance Letter Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('kabul_mektubu/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Acceptance Id</th>
						<th>Student Id</th>
						<th>Acceptance Letter</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($kabul_mektubu as $k){ ?>
                    <tr>
						<td><?php echo $k['kabul_id']; ?></td>
						<td><?php echo $k['o_id']; ?></td>
						<td><?php echo $k['mektup']; ?></td>
						<td>
                            <a href="<?php echo site_url('kabul_mektubu/edit/'.$k['kabul_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('kabul_mektubu/remove/'.$k['kabul_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

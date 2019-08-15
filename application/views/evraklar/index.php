<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Evraklar Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('evraklar/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Evrak Id</th>
						<th>O Id</th>
						<th>Evrak1</th>
						<th>Evrak2</th>
						<th>Evrak3</th>
						<th>Evrak4</th>
						<th>Evrak5</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($evraklar as $e){ ?>
                    <tr>
						<td><?php echo $e['evrak_id']; ?></td>
						<td><?php echo $e['o_id']; ?></td>
						<td><?php echo $e['evrak1']; ?></td>
						<td><?php echo $e['evrak2']; ?></td>
						<td><?php echo $e['evrak3']; ?></td>
						<td><?php echo $e['evrak4']; ?></td>
						<td><?php echo $e['evrak5']; ?></td>
						<td>
                            <a href="<?php echo site_url('evraklar/edit/'.$e['evrak_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('evraklar/remove/'.$e['evrak_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

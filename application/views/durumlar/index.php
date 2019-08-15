<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Durumlar Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('durumlar/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Durum Id</th>
						<th>Durum Adi</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($durumlar as $d){ ?>
                    <tr>
						<td><?php echo $d['durum_id']; ?></td>
						<td><?php echo $d['durum_adi']; ?></td>
						<td>
                            <a href="<?php echo site_url('durumlar/edit/'.$d['durum_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('durumlar/remove/'.$d['durum_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

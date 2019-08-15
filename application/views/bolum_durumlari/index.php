<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Bolum Durumlari Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('bolum_durumlari/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Bolum Durumlari Id</th>
						<th>Bolum Durum Adi</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($bolum_durumlari as $b){ ?>
                    <tr>
						<td><?php echo $b['bolum_durumlari_id']; ?></td>
						<td><?php echo $b['bolum_durum_adi']; ?></td>
						<td>
                            <a href="<?php echo site_url('bolum_durumlari/edit/'.$b['bolum_durumlari_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('bolum_durumlari/remove/'.$b['bolum_durumlari_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

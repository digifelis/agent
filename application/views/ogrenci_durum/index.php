<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Student Status Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('ogrenci_durum/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Student Status Id</th>
						<th>Student Status Name</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($ogrenci_durum as $o){ ?>
                    <tr>
						<td><?php echo $o['oogrenci_durum_id']; ?></td>
						<td><?php echo $o['ogrenci_durum_adi']; ?></td>
						<td>
                            <a href="<?php echo site_url('ogrenci_durum/edit/'.$o['oogrenci_durum_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('ogrenci_durum/remove/'.$o['oogrenci_durum_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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

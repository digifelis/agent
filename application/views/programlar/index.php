<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Program Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('programlar/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<!--<th>Program Id</th>
						<th>Durum</th>
						<th>Fakulte</th>
						<th>Bolum</th> -->
						<th>Program Name</th>
						<th>Program Fee</th>
						<th>Program Duration</th>
						<th>Program Language</th>
						<!--<th>Aciklama</th> -->
						<th>Actions</th>
                    </tr>
                    <?php foreach($programlar as $p){ ?>
                    <tr>
						<!--<td><?php echo $p['program_id']; ?></td>
						<td><?php echo $p['durum']; ?></td>
						<td><?php echo $p['fakulte']; ?></td>
						<td><?php echo $p['bolum']; ?></td> -->
						<td><?php echo $p['adi']; ?></td>
						<td><?php echo $p['fiyat']; ?></td>
						<td><?php echo $p['egit_sure']; ?></td>
						<td><?php echo $p['egit_dili']; ?></td>
						<!--<td><?php echo $p['aciklama']; ?></td> -->
						<td>
                            <a href="<?php echo site_url('programlar/edit/'.$p['program_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('programlar/remove/'.$p['program_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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

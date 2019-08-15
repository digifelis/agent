<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Student Status Edit</h3>
            </div>
			<?php echo form_open('ogrenci_durum/edit/'.$ogrenci_durum['oogrenci_durum_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="ogrenci_durum_adi" class="control-label">Student Status Name</label>
						<div class="form-group">
							<input type="text" name="ogrenci_durum_adi" value="<?php echo ($this->input->post('ogrenci_durum_adi') ? $this->input->post('ogrenci_durum_adi') : $ogrenci_durum['ogrenci_durum_adi']); ?>" class="form-control" id="ogrenci_durum_adi" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>
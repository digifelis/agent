<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Country Edit</h3>
            </div>
			<?php echo form_open('ulkeler/edit/'.$ulkeler['ulke_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="ulke_adi" class="control-label"><span class="text-danger">*</span>Country Name</label>
						<div class="form-group">
							<input type="text" name="ulke_adi" value="<?php echo ($this->input->post('ulke_adi') ? $this->input->post('ulke_adi') : $ulkeler['ulke_adi']); ?>" class="form-control" id="ulke_adi" />
							<span class="text-danger"><?php echo form_error('ulke_adi');?></span>
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
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Bolum Durumlari Edit</h3>
            </div>
			<?php echo form_open('bolum_durumlari/edit/'.$bolum_durumlari['bolum_durumlari_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="bolum_durum_adi" class="control-label">Bolum Durum Adi</label>
						<div class="form-group">
							<input type="text" name="bolum_durum_adi" value="<?php echo ($this->input->post('bolum_durum_adi') ? $this->input->post('bolum_durum_adi') : $bolum_durumlari['bolum_durum_adi']); ?>" class="form-control" id="bolum_durum_adi" />
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
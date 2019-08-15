<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Acceptance Letter Edit</h3>
            </div>
			<?php echo form_open('kabul_mektubu/edit/'.$kabul_mektubu['kabul_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="o_id" class="control-label">Student</label>
						<div class="form-group">
							<select name="o_id" class="form-control">
								<option value="">Select Student</option>
								<?php 
								foreach($all_ogrenci as $ogrenci)
								{
									$selected = ($ogrenci['ogrenci_id'] == $kabul_mektubu['o_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$ogrenci['ogrenci_id'].'" '.$selected.'>'.$ogrenci['adi_soyadi'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mektup" class="control-label">Acceptance Letter</label>
						<div class="form-group">
							<input type="text" name="mektup" value="<?php echo ($this->input->post('mektup') ? $this->input->post('mektup') : $kabul_mektubu['mektup']); ?>" class="form-control" id="mektup" />
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
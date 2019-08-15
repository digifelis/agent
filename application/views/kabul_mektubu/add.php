<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Acceptance Letter Add</h3>
            </div>
            <?php echo form_open('kabul_mektubu/add'); ?>
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
									$selected = ($ogrenci['ogrenci_id'] == $this->input->post('o_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$ogrenci['ogrenci_id'].'" '.$selected.'>'.$ogrenci['adi_soyadi'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mektup" class="control-label">Acceptance Letter</label>
						<div class="form-group">
							<input type="text" name="mektup" value="<?php echo $this->input->post('mektup'); ?>" class="form-control" id="mektup" />
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
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Faculty Add</h3>
            </div>
            <?php echo form_open('fakulte/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="fakulte_adi" class="control-label"><span class="text-danger">*</span>Faculty Name</label>
						<div class="form-group">
							<input type="text" name="fakulte_adi" value="<?php echo $this->input->post('fakulte_adi'); ?>" class="form-control" id="fakulte_adi" />
							<span class="text-danger"><?php echo form_error('fakulte_adi');?></span>
						</div>
					</div>
                    
                    
                    
                    <div class="col-md-6">
						<label for="seviye" class="control-label"><span class="text-danger">*</span>Level of Program</label>
						<div class="form-group">
                        <select name="seviye" class="form-control">
                        <option value="1">Associate Degree</option>
                        <option value="2">Under Graduate Degree (Bachelors)</option>
                        <option value="3">Graduate Degree (Masters)</option>
                        <option value="4">Doctoral Degree</option>
                        </select>
							
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
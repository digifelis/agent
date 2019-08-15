<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Faculty Edit</h3>
            </div>
			<?php echo form_open('fakulte/edit/'.$fakulte['fakulte_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="fakulte_adi" class="control-label"><span class="text-danger">*</span>Faculty Name</label>
						<div class="form-group">
							<input type="text" name="fakulte_adi" value="<?php echo ($this->input->post('fakulte_adi') ? $this->input->post('fakulte_adi') : $fakulte['fakulte_adi']); ?>" class="form-control" id="fakulte_adi" />
							<span class="text-danger"><?php echo form_error('fakulte_adi');?></span>
						</div>
					</div>
                    
                    
                    
                    
                                        <div class="col-md-6">
						<label for="seviye" class="control-label"><span class="text-danger">*</span>Level of Program</label>
						<div class="form-group">
                        <select name="seviye" class="form-control">
                        <option value="">select Seviye</option>
                        
                      
                                
                        <option value="1" <?php if($fakulte['seviye'] == 1) { echo "selected=selected"; } ?> >Associate Degree</option>
                        <option value="2" <?php if($fakulte['seviye'] == 2) { echo "selected=selected"; } ?>>Under Graduate Degree (Bachelors)</option>
                        <option value="3" <?php if($fakulte['seviye'] == 3) { echo "selected=selected"; } ?>>Graduate Degree (Masters)</option>
                        <option value="4" <?php if($fakulte['seviye'] == 4) { echo "selected=selected"; } ?>>Doctoral Degree</option>
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
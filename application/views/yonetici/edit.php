<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Edit</h3>
            </div>
			<?php echo form_open('yonetici/edit/'.$yonetici['y_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="onay" class="control-label">Status</label>
						<div class="form-group">
							<select name="onay" class="form-control">
								<option value="">Select Status</option>
								<?php 
								foreach($all_durumlar as $durumlar)
								{
									$selected = ($durumlar['durum_id'] == $yonetici['onay']) ? ' selected="selected"' : "";

									echo '<option value="'.$durumlar['durum_id'].'" '.$selected.'>'.$durumlar['durum_adi'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
                    
                    
                    
                    
                    <div class="col-md-6">
						<label for="onay" class="control-label">User Type</label>
						<div class="form-group">
							<select name="yetki" class="form-control">
								<option value="">Select User Type</option>
                                <option value="3" <?php if($yonetici['yetki'] == 3) { echo 'selected="selected"'; } ?>>Agent</option>
                                <option value="2" <?php if($yonetici['yetki'] == 2) { echo 'selected="selected"'; } ?>>Ofice Staff</option>
                                
							
							</select>
						</div>
					</div>
                    
                    
                    
                    
                    
                    
                    <div class="col-md-6">
						<label for="onay" class="control-label">Agent</label>
						<div class="form-group">
							<select name="y_okul_id" class="form-control">
								<option value="">Select Agent</option>
								<?php 
								foreach($all_acenta as $durumlar)
								{
									$selected = ($durumlar['acenta_id'] == $yonetici['y_okul_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$durumlar['acenta_id'].'" '.$selected.'>'.$durumlar['adi'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
                    
                    
                    
                    
                    <div class="col-md-6">
						<label for="yetkili" class="control-label"><span class="text-danger">*</span>Authorized Name</label>
						<div class="form-group">
							<input type="text" name="yetkili" value="<?php echo ($this->input->post('yetkili') ? $this->input->post('yetkili') : $yonetici['yetkili']); ?>" class="form-control" id="yetkili" />
							<span class="text-danger"><?php echo form_error('yetkili');?></span>
						</div>
					</div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
					<div class="col-md-6">
						<label for="kul_adi" class="control-label"><span class="text-danger">*</span>User Name</label>
						<div class="form-group">
							<input type="text" name="kul_adi" value="<?php echo ($this->input->post('kul_adi') ? $this->input->post('kul_adi') : $yonetici['kul_adi']); ?>" class="form-control" id="kul_adi" />
							<span class="text-danger"><?php echo form_error('kul_adi');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="kul_pass" class="control-label"><span class="text-danger">*</span>User Password</label>
						<div class="form-group">
							<input type="text" name="kul_pass" value="<?php echo ($this->input->post('kul_pass') ? $this->input->post('kul_pass') : $yonetici['kul_pass']); ?>" class="form-control" id="kul_pass" />
							<span class="text-danger"><?php echo form_error('kul_pass');?></span>
						</div>
					</div>

					<div class="col-md-6">
                        <label for="kul_email" class="control-label"><span class="text-danger">*</span>User Email</label>
                        <div class="form-group">
                            <input type="text" name="kul_email" value="<?php echo ($this->input->post('kul_email') ? $this->input->post('kul_email') : $yonetici['kul_email']); ?>" class="form-control" id="kul_email" />
                            <span class="text-danger"><?php echo form_error('kul_email');?></span>
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
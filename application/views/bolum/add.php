<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Program Add</h3>
            </div>
            <?php echo form_open('bolum/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="f_id" class="control-label">Faculty</label>
						<div class="form-group">
							<select name="f_id" class="form-control">
								<option value="">Select Faculty</option>
								<?php 
								foreach($all_fakulte as $fakulte)
								{
									$selected = ($fakulte['fakulte_id'] == $this->input->post('f_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$fakulte['fakulte_id'].'" '.$selected.'>'.$fakulte['fakulte_adi'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="bolum_durum" class="control-label">Program Status</label>
						<div class="form-group">
							<select name="bolum_durum" class="form-control">
								<option value="">Select Program Status</option>
								<?php 
								foreach($all_bolum_durumlari as $bolum_durumlari)
								{
									$selected = ($bolum_durumlari['bolum_durumlari_id'] == $this->input->post('bolum_durum')) ? ' selected="selected"' : "";

									echo '<option value="'.$bolum_durumlari['bolum_durumlari_id'].'" '.$selected.'>'.$bolum_durumlari['bolum_durum_adi'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="bolum_adi" class="control-label">Program Name</label>
						<div class="form-group">
							<input type="text" name="bolum_adi" value="<?php echo $this->input->post('bolum_adi'); ?>" class="form-control" id="bolum_adi" />
						</div>
					</div>
                    
                    
                    
                    
                    
                    <div class="col-md-6">
						<label for="egitim_sure" class="control-label">Program Duration</label>
						<div class="form-group">
							<input type="text" name="egitim_sure" value="<?php echo $this->input->post('egitim_sure'); ?>" class="form-control" id="egitim_sure" />
						</div>
					</div>
                    
                    
                    
                    <div class="col-md-6">
						<label for="egitim_dili" class="control-label">Program Language</label>
						<div class="form-group">
							<input type="text" name="egitim_dili" value="<?php echo $this->input->post('egitim_dili'); ?>" class="form-control" id="bolum_adi" />
						</div>
					</div>
                    
                     <div class="col-md-6">
						<label for="ucreti" class="control-label">Program Fee</label>
						<div class="form-group">
							<input type="text" name="ucreti" value="<?php echo $this->input->post('ucreti'); ?>" class="form-control" id="ucreti" />
						</div>
					</div>
                    
                    
                    <div class="col-md-6">
						<label for="aciklama" class="control-label">Description</label>
						<div class="form-group">
              <textarea name="aciklama" class="form-control"><?php echo $this->input->post('aciklama'); ?></textarea>
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
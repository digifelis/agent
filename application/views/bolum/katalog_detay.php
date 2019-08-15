<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Program Edit</h3>
            </div>
			
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="f_id" class="control-label">Faculty</label>
						<div class="form-group">
						
							<select name="f_id" class="form-control" disabled>
								<option value="">Select Fakulty</option>
								<?php 
								foreach($all_fakulte as $fakulte)
								{
									$selected = ($fakulte['fakulte_id'] == $bolum['f_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$fakulte['fakulte_id'].'" '.$selected.'>'.$fakulte['fakulte_adi'].'</option>';
								} 
								
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="bolum_durum" class="control-label">Program Status</label>
						<div class="form-group">
							<select name="bolum_durum" class="form-control" disabled>
								<option value="">Select Program Status</option>
								<?php 
								foreach($all_bolum_durumlari as $bolum_durumlari)
								{
									$selected = ($bolum_durumlari['bolum_durumlari_id'] == $bolum['bolum_durum']) ? ' selected="selected"' : "";

									echo '<option value="'.$bolum_durumlari['bolum_durumlari_id'].'" '.$selected.'>'.$bolum_durumlari['bolum_durum_adi'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="bolum_adi" class="control-label">Program Name</label>
						<div class="form-group">
							<input type="text" name="bolum_adi" value="<?php echo ($this->input->post('bolum_adi') ? $this->input->post('bolum_adi') : $bolum['bolum_adi']); ?>" class="form-control" id="bolum_adi"  disabled/>
						</div>
					</div>
                    
                    
                    
                    
                   <div class="col-md-6">
						<label for="egitim_sure" class="control-label">Program Duration</label>
						<div class="form-group">
							<input type="text" name="egitim_sure" value="<?php echo ($this->input->post('egitim_sure') ? $this->input->post('egitim_sure') : $bolum['egitim_sure']); ?>" class="form-control" id="egitim_sure"  disabled />
						</div>
					</div> 
                    
                    <div class="col-md-6">
						<label for="egitim_dili" class="control-label">Program Language</label>
						<div class="form-group">
							<input type="text" name="egitim_dili" value="<?php echo ($this->input->post('egitim_dili') ? $this->input->post('egitim_dili') : $bolum['egitim_dili']); ?>" class="form-control" id="egitim_dili"  disabled />
						</div>
					</div> 
                    
                    
                    
                    <div class="col-md-6">
						<label for="egitim_ucreti" class="control-label">Program Fee</label>
						<div class="form-group">
							<input type="text" name="ucreti" value="<?php echo ($this->input->post('ucreti') ? $this->input->post('ucreti') : $bolum['ucreti']); ?>" class="form-control" id="ucreti"  disabled />
						</div>
					</div> 
                    
                    
                    
                    <div class="col-md-6">
						<label for="aciklama" class="control-label">Description</label>
						<div class="form-group">
                        <textarea class="form-control" name="aciklama"  disabled ><?php echo ($this->input->post('aciklama') ? $this->input->post('aciklama') : $bolum['aciklama']); ?></textarea>
							
						</div>
					</div> 
                    
                    
                    
                    
				</div>
			</div>

		</div>
    </div>
</div>
<?php 
$yetki = $this->session->userdata('yetki');
if($yetki<3) { ?> 
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Agent Edit</h3>
            </div>
			<?php echo form_open('acenta/edit/'.$acenta['acenta_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="ulke" class="control-label"><span class="text-danger">*</span>Country</label>
						<div class="form-group">
							<select name="ulke" class="form-control">
								<option value="">Select Country</option>
								<?php 
								foreach($all_ulkeler as $ulkeler)
								{
									$selected = ($ulkeler['ulke_id'] == $acenta['ulke']) ? ' selected="selected"' : "";

									echo '<option value="'.$ulkeler['ulke_id'].'" '.$selected.'>'.$ulkeler['ulke_adi'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('ulke');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="durum" class="control-label">Status</label>
						<div class="form-group">
							<select name="durum" class="form-control">
								<option value="">Select Status</option>
								<?php 
								foreach($all_durumlar as $durumlar)
								{
									$selected = ($durumlar['durum_id'] == $acenta['durum']) ? ' selected="selected"' : "";

									echo '<option value="'.$durumlar['durum_id'].'" '.$selected.'>'.$durumlar['durum_adi'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
				
					<div class="col-md-6">
						<label for="adi" class="control-label"><span class="text-danger">*</span>Agent Name</label>
						<div class="form-group">
							<input type="text" name="adi" value="<?php echo ($this->input->post('adi') ? $this->input->post('adi') : $acenta['adi']); ?>" class="form-control" id="adi" />
							<span class="text-danger"><?php echo form_error('adi');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="sehir" class="control-label">City</label>
						<div class="form-group">
							<input type="text" name="sehir" value="<?php echo ($this->input->post('sehir') ? $this->input->post('sehir') : $acenta['sehir']); ?>" class="form-control" id="sehir" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tel1" class="control-label">Phone Number 1</label>
						<div class="form-group">
							<input type="text" name="tel1" value="<?php echo ($this->input->post('tel1') ? $this->input->post('tel1') : $acenta['tel1']); ?>" class="form-control" id="tel1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tel2" class="control-label">Phone Number 2</label>
						<div class="form-group">
							<input type="text" name="tel2" value="<?php echo ($this->input->post('tel2') ? $this->input->post('tel2') : $acenta['tel2']); ?>" class="form-control" id="tel2" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="mail" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="mail" value="<?php echo ($this->input->post('mail') ? $this->input->post('mail') : $acenta['mail']); ?>" class="form-control" id="mail" />
						</div>
						<span class="text-danger"><?php echo form_error('mail');?></span>
					</div>
					
						<div class="col-md-6">
						<label for="tel2" class="control-label">Description</label>
						<div class="form-group">
						<textarea name="aciklama" class="form-control"><?php echo ($this->input->post('aciklama') ? $this->input->post('aciklama') : $acenta['aciklama']); ?></textarea>	
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
<?php } ?>

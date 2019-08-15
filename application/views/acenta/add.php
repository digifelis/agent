<?php 
$yetki = $this->session->userdata('yetki');
if($yetki<3) { ?> 
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Agent Add</h3>
            </div>
            <?php echo form_open('acenta/add'); ?>
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
									$selected = ($ulkeler['ulke_id'] == $this->input->post('ulke')) ? ' selected="selected"' : "";

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
									$selected = ($durumlar['durum_id'] == $this->input->post('durum')) ? ' selected="selected"' : "";

									echo '<option value="'.$durumlar['durum_id'].'" '.$selected.'>'.$durumlar['durum_adi'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
					  <label for="adi" class="control-label"><span class="text-danger">*</span>Agent Name</label>
						<div class="form-group">
							<input type="text" name="adi" value="<?php echo $this->input->post('adi'); ?>" class="form-control" id="adi" />
							<span class="text-danger"><?php echo form_error('adi');?></span>
						</div>
					</div>
					<div class="col-md-6">
					  <label for="sehir" class="control-label">City</label>
						<div class="form-group">
							<input type="text" name="sehir" value="<?php echo $this->input->post('sehir'); ?>" class="form-control" id="sehir" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tel1" class="control-label">Phone 1</label>
						<div class="form-group">
							<input type="text" name="tel1" value="<?php echo $this->input->post('tel1'); ?>" class="form-control" id="tel1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tel2" class="control-label">Phone 2</label>
						<div class="form-group">
							<input type="text" name="tel2" value="<?php echo $this->input->post('tel2'); ?>" class="form-control" id="tel2" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="mail" value="<?php echo $this->input->post('mail'); ?>" class="form-control" id="mail" />
						</div>
						<span class="text-danger"><?php echo form_error('mail');?></span>
					</div>
					
					
					<div class="col-md-6">
						<label for="tel2" class="control-label">Description</label>
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
<?php } ?>

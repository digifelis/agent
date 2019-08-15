<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Program Edit</h3>
            </div>
			<?php echo form_open('programlar/edit/'.$programlar['program_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="durum" class="control-label">Status</label>
						<div class="form-group">
							<select name="durum" class="form-control">
								<option value="">Select Status</option>
								<?php 
								foreach($all_durumlar as $durumlar)
								{
									$selected = ($durumlar['durum_id'] == $programlar['durum']) ? ' selected="selected"' : "";

									echo '<option value="'.$durumlar['durum_id'].'" '.$selected.'>'.$durumlar['durum_adi'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fakulte" class="control-label">Faculty</label>
						<div class="form-group">
							<select name="fakulte" class="form-control">
								<option value="">Select Faculty</option>
								<?php 
								foreach($all_fakulte as $fakulte)
								{
									$selected = ($fakulte['fakulte_id'] == $programlar['fakulte']) ? ' selected="selected"' : "";

									echo '<option value="'.$fakulte['fakulte_id'].'" '.$selected.'>'.$fakulte['fakulte_adi'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="bolum" class="control-label">Program</label>
						<div class="form-group">
							<select name="bolum" class="form-control">
								<option value="">Select Program</option>
								<?php 
								foreach($all_bolum as $bolum)
								{
									$selected = ($bolum['bolum_id'] == $programlar['bolum']) ? ' selected="selected"' : "";

									echo '<option value="'.$bolum['bolum_id'].'" '.$selected.'>'.$bolum['bolum_adi'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="adi" class="control-label">Program Name</label>
						<div class="form-group">
							<input type="text" name="adi" value="<?php echo ($this->input->post('adi') ? $this->input->post('adi') : $programlar['adi']); ?>" class="form-control" id="adi" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fiyat" class="control-label">Program Fee</label>
						<div class="form-group">
							<input type="text" name="fiyat" value="<?php echo ($this->input->post('fiyat') ? $this->input->post('fiyat') : $programlar['fiyat']); ?>" class="form-control" id="fiyat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="egit_sure" class="control-label">Program Duration</label>
						<div class="form-group">
							<input type="text" name="egit_sure" value="<?php echo ($this->input->post('egit_sure') ? $this->input->post('egit_sure') : $programlar['egit_sure']); ?>" class="form-control" id="egit_sure" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="egit_dili" class="control-label">Program Language</label>
						<div class="form-group">
							<input type="text" name="egit_dili" value="<?php echo ($this->input->post('egit_dili') ? $this->input->post('egit_dili') : $programlar['egit_dili']); ?>" class="form-control" id="egit_dili" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="aciklama" class="control-label">Desription</label>
						<div class="form-group">
							<textarea name="aciklama" class="form-control" id="aciklama"><?php echo ($this->input->post('aciklama') ? $this->input->post('aciklama') : $programlar['aciklama']); ?></textarea>
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
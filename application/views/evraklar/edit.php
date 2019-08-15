<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Documents</h3>
            </div>
			<?php echo form_open('evraklar/edit/'.$evraklar['evrak_id']); ?>
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
									$selected = ($ogrenci['ogrenci_id'] == $evraklar['o_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$ogrenci['ogrenci_id'].'" '.$selected.'>'.$ogrenci['adi_soyadi'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="evrak1" class="control-label">Document 1</label>
						<div class="form-group">
							<input type="text" name="evrak1" value="<?php echo ($this->input->post('evrak1') ? $this->input->post('evrak1') : $evraklar['evrak1']); ?>" class="form-control" id="evrak1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="evrak2" class="control-label">Document 2</label>
						<div class="form-group">
							<input type="text" name="evrak2" value="<?php echo ($this->input->post('evrak2') ? $this->input->post('evrak2') : $evraklar['evrak2']); ?>" class="form-control" id="evrak2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="evrak3" class="control-label">Document 3</label>
						<div class="form-group">
							<input type="text" name="evrak3" value="<?php echo ($this->input->post('evrak3') ? $this->input->post('evrak3') : $evraklar['evrak3']); ?>" class="form-control" id="evrak3" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="evrak4" class="control-label">Document 4</label>
						<div class="form-group">
							<input type="text" name="evrak4" value="<?php echo ($this->input->post('evrak4') ? $this->input->post('evrak4') : $evraklar['evrak4']); ?>" class="form-control" id="evrak4" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="evrak5" class="control-label">Document 5</label>
						<div class="form-group">
							<input type="text" name="evrak5" value="<?php echo ($this->input->post('evrak5') ? $this->input->post('evrak5') : $evraklar['evrak5']); ?>" class="form-control" id="evrak5" />
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
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Basvuru Surec Add</h3>
            </div>
            <?php echo form_open('basvuru_surec/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="o_id" class="control-label">Ogrenci</label>
						<div class="form-group">
							<select name="o_id" class="form-control">
								<option value="">select ogrenci</option>
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
						<label for="islem" class="control-label">Islem</label>
						<div class="form-group">
							<input type="text" name="islem" value="<?php echo $this->input->post('islem'); ?>" class="form-control" id="islem" />
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
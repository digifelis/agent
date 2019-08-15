<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Ogrenci Secimi Edit</h3>
            </div>
			<?php echo form_open('ogrenci_secimi/edit/'.$ogrenci_secimi['id']); ?>
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
									$selected = ($ogrenci['ogrenci_id'] == $ogrenci_secimi['o_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$ogrenci['ogrenci_id'].'" '.$selected.'>'.$ogrenci['adi_soyadi'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="f_id" class="control-label">Fakulte</label>
						<div class="form-group">
							<select name="f_id" class="form-control">
								<option value="">select fakulte</option>
								<?php 
								foreach($all_fakulte as $fakulte)
								{
									$selected = ($fakulte['fakulte_id'] == $ogrenci_secimi['f_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$fakulte['fakulte_id'].'" '.$selected.'>'.$fakulte['fakulte_adi'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="b_id" class="control-label">Programlar</label>
						<div class="form-group">
							<select name="b_id" class="form-control">
								<option value="">select programlar</option>
								<?php 
								foreach($all_programlar as $programlar)
								{
									$selected = ($programlar['program_id'] == $ogrenci_secimi['b_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$programlar['program_id'].'" '.$selected.'>'.$programlar['adi'].'</option>';
								} 
								?>
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
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
		<a href="<?php echo site_url('ogrenci/index'); ?>" class="btn btn-success btn-sm">Back</a>
            <div class="box-header with-border">
              	<h3 class="box-title">Student Edit</h3>
            </div>
						<?php 
			if(count($tercihler) > 0) {
				echo "Student Information : <br>";
								foreach($tercihler as $tercih)
								{
									echo "Faculty : ".$tercih['fakulte_adi'].'<br>Program : '.$tercih['bolum_adi'].'<br>Program Language : '.$tercih['egitim_dili'].'<br>Apply Date : '.$tercih['zaman'].'<br>';
								} 
								if($yetki < 3) {
			echo '<a href="'.site_url('ogrenci/tercih_sil/'.$tercih['id']).'" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>';
								}
			}
								?>
			<div class="box-body">
				<div class="row clearfix">
				<!--	<div class="col-md-6">
						<label for="a_id" class="control-label">Acenta</label>
						<div class="form-group">
							<select name="a_id" class="form-control">
								<option value="">select acenta</option>
								<?php 
								foreach($all_acenta as $acenta)
								{
									$selected = ($acenta['acenta_id'] == $ogrenci['a_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$acenta['acenta_id'].'" '.$selected.'>'.$acenta['adi'].'</option>';
								} 
								?>
							</select>
						</div>
					</div> -->
					<!--<div class="col-md-6">
						<label for="durum" class="control-label">Ogrenci Durum</label>
						<div class="form-group">
							<select name="durum" class="form-control">
								<option value="">select ogrenci_durum</option>
								<?php 
								foreach($all_ogrenci_durum as $ogrenci_durum)
								{
									$selected = ($ogrenci_durum['oogrenci_durum_id'] == $ogrenci['durum']) ? ' selected="selected"' : "";

									echo '<option value="'.$ogrenci_durum['oogrenci_durum_id'].'" '.$selected.'>'.$ogrenci_durum['ogrenci_durum_adi'].'</option>';
								} 
								?>
							</select>
						</div>
					</div> -->
					<div class="col-md-6">
						<label for="adi_soyadi" class="control-label">Name Surname</label>
						<div class="form-group">
							<input disabled type="text" name="adi_soyadi" value="<?php echo ($this->input->post('adi_soyadi') ? $this->input->post('adi_soyadi') : $ogrenci['adi_soyadi']); ?>" class="form-control" id="adi_soyadi" />
						</div>
					</div>
                    
                    
                    
                    
                                       
                                     
                    
       <div class="col-md-6">
						<label for="pasaport_no" class="control-label">Passaport Number</label>
						<div class="form-group">
							<input disabled  type="text" name="pasaport_no" value="<?php echo ($this->input->post('pasaport_no') ? $this->input->post('pasaport_no') : $ogrenci['pasaport_no']); ?>" class="form-control" id="pasaport_no" />
						</div>
					</div>             
                    
                    
                    
          <div class="col-md-6">
						<label for="baba_adi" class="control-label">Father Name</label>
						<div class="form-group">
							<input disabled  type="text" name="baba_adi" value="<?php echo ($this->input->post('baba_adi') ? $this->input->post('baba_adi') : $ogrenci['baba_adi']); ?>" class="form-control" id="baba_adi" />
						</div>
					</div>   
                    
                    
                    
                           <div class="col-md-6">
						<label for="anne_adi" class="control-label">Mother Name</label>
						<div class="form-group">
							<input disabled  type="text" name="anne_adi" value="<?php echo ($this->input->post('anne_adi') ? $this->input->post('anne_adi') : $ogrenci['anne_adi']); ?>" class="form-control" id="anne_adi" />
						</div>
					</div>   
                    
                                     
                               <div class="col-md-6">
						<label for="dogum_yeri" class="control-label">Place of Birth</label>
						<div class="form-group">
							<input disabled  type="text" name="dogum_yeri" value="<?php echo ($this->input->post('dogum_yeri') ? $this->input->post('dogum_yeri') : $ogrenci['dogum_yeri']); ?>" class="form-control" id="dogum_yeri" />
						</div>
					</div>   
                    
                                     
                    
                                <div class="col-md-6">
						<label for="dogum_tarihi" class="control-label">Date of Birth</label>
						<div class="form-group">
							<input disabled  type="text" name="dogum_tarihi" value="<?php echo ($this->input->post('dogum_tarihi') ? $this->input->post('dogum_tarihi') : $ogrenci['dogum_tarihi']); ?>" class="form-control" id="dogum_tarih"  data-inputmask="'alias': 'yyyy/mm/dd'" data-mask=""  />
						</div>
					</div>   
                    
                               <div class="col-md-6">
						<label for="cinsiyet" class="control-label">Gender</label>
						<div class="form-group">
							<input disabled  type="text" name="cinsiyet" value="<?php echo ($this->input->post('cinsiyet') ? $this->input->post('cinsiyet') : $ogrenci['cinsiyet']); ?>" class="form-control" id="cinsiyet" />
						</div>
					</div>   
                    
                                                     
                            <div class="col-md-6">
						<label for="medeni_durum" class="control-label">Marital Status</label>
						<div class="form-group">
							<input disabled  type="text" name="medeni_durum" value="<?php echo ($this->input->post('medeni_durum') ? $this->input->post('medeni_durum') : $ogrenci['medeni_durum']); ?>" class="form-control" id="medeni_durum" />
						</div>
					</div>   
                    
                                        
                            <div class="col-md-6">
						<label for="uyrugu" class="control-label">Nationality</label>
						<div class="form-group">
							<input disabled  type="text" name="uyrugu" value="<?php echo ($this->input->post('uyrugu') ? $this->input->post('uyrugu') : $ogrenci['uyrugu']); ?>" class="form-control" id="pasaport_no" />
						</div>
					</div>   
                    
                                        
                            <div class="col-md-6">
						<label for="adres" class="control-label">Address</label>
						<div class="form-group">
                        <textarea disabled  class="form-control" name="adres"><?php echo ($this->input->post('adres') ? $this->input->post('adres') : $ogrenci['adres']); ?></textarea>
			
						</div>
					</div>   
                    
                           <div class="col-md-6">
						<label for="posta_kodu" class="control-label">Postal Code</label>
						<div class="form-group">
							<input disabled  type="text" name="posta_kodu" value="<?php echo ($this->input->post('posta_kodu') ? $this->input->post('posta_kodu') : $ogrenci['posta_kodu']); ?>" class="form-control" id="posta_kodu" />
						</div>
					</div>   
                    
                           <div class="col-md-6">
						<label for="sehir" class="control-label">City</label>
						<div class="form-group">
							<input disabled  type="text" name="sehir" value="<?php echo ($this->input->post('sehir') ? $this->input->post('sehir') : $ogrenci['sehir']); ?>" class="form-control" id="sehir" />
						</div>
					</div>   
                    
                                                                                  
                            <div class="col-md-6">
						<label for="ulke" class="control-label">Country</label>
						<div class="form-group">
							<input disabled  type="text" name="ulke" value="<?php echo ($this->input->post('ulke') ? $this->input->post('ulke') : $ogrenci['ulke']); ?>" class="form-control" id="ulke" />
						</div>
					</div>   
                    
                             <div class="col-md-6">
						<label for="telefon" class="control-label">Phone Number</label>
						<div class="form-group">
							<input  disabled type="text" name="telefon" value="<?php echo ($this->input->post('telefon') ? $this->input->post('telefon') : $ogrenci['telefon']); ?>" class="form-control" id="telefon" />
						</div>
					</div>   
                    
   
                    
                    
                    
                    
                    
                    
                    
				</div>
			</div>
			<div class="box-footer">
            	
	        </div>				
			
		</div>
    </div>
</div>
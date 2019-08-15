<a href="<?php echo site_url('ogrenci/index'); ?>" class="btn btn-success btn-sm">Back</a>

<!-- display status message -->
<p><?php echo $this->session->flashdata('statusMsg'); ?></p>

<!-- file upload form -->
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label>Choose Files</label>
        <input type="file" name="files[]" multiple/>
    </div>
    <div class="form-group">
    <label>Document Type</label>
    <select name="belge_tipi" class="form-control">
								
								<?php 
								foreach($all_belge_tipi as $belge_tipi)
								{
								//	$selected = ($belge_tipi['belge_tipi'] == $this->input->post('id')) ? ' selected="selected"' : "";

									echo '<option value="'.$belge_tipi['id'].'" >'.$belge_tipi['belge_adi'].'</option>';
								} 
								?>
							</select>
    <div class="form-group">
        <input type="submit" name="fileSubmit" value="UPLOAD"/>
    </div>
</form>


<!-- display uploaded images -->

               
               
                
              
             

   
<table class="table">
                <tbody>
                         <tr>
                  <th style="width: 10px">#</th>
                  <th>File Name</th>
                  <th>Upload Date</th>
                  <th>File Type</th>
                  <th style="width: 40px">Action</th>
                </tr>
        <?php 
		$x = 1;
		if(!empty($files)){ foreach($files as $file){ ?>
        
        
        

                <tr>
                  <td><?php echo $x; $x++;?></td>
                  <td><a href="<?php echo base_url('uploads/files/'.$file['file_name']); ?>" target="_blank"><?php echo $file['file_name']; ?></a></td>
                  
                  <td>
                    <?php echo date("j M Y",strtotime($file['uploaded_on'])); ?>
                  </td>
                  <td>
				  <?php
				  
				  print_r($this->Ogrenci_model->get_belge_tipi($file['belge_tipi']));
				  
				  
				  ?>
				  
				  </td>
                  <td><a href="<?php echo base_url('ogrenci/dosya_sil/'.$this->uri->segment("3").'/'.$file['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a></td>
                </tr>
        

        <?php } } ?>
                </tbody></table>
        
     

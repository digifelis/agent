        <div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                Welcome to SIU International Students Office              </h3>
            </div>
        </div>
    </div>
</div>    
        
<?php 
date_default_timezone_set('Etc/GMT-3');
function timeConvert ( $zaman ){
	$zaman =  strtotime($zaman);
	$zaman_farki =  time() - $zaman;
	$saniye = $zaman_farki;
	$dakika = round($zaman_farki/60);
	$saat = round($zaman_farki/3600);
	$gun = round($zaman_farki/86400);
	$hafta = round($zaman_farki/604800);
	$ay = round($zaman_farki/2419200);
	$yil = round($zaman_farki/29030400);
	if( $saniye < 60 ){
		if ($saniye == 0){
			return "shortly before";
		} else {
			return ' <small class="label label-danger"><i class="fa fa-clock-o"></i>'.$saniye.' second </small>';
		}
	} else if ( $dakika < 60 ){
		return ' <small class="label label-danger"><i class="fa fa-clock-o"></i>'.$dakika.' minute </small>';
	} else if ( $saat < 24 ){
		return ' <small class="label label-info"><i class="fa fa-clock-o"></i> '.$saat.' hours</small>';
	} else if ( $gun < 7 ){
		return ' <small class="label label-warning"><i class="fa fa-clock-o"></i>'.$saat.' days</small>';
	} else if ( $hafta < 4 ){
		return '<small class="label label-primary"><i class="fa fa-clock-o"></i> '.$hafta.' week</small>';
	} else if ( $ay < 12 ){
		return $ay .' month ago';
		return ' <small class="label label-default"><i class="fa fa-clock-o"></i> '.$ay.' month</small>';
	} else {
		return ' <small class="label label-default"><i class="fa fa-clock-o"></i> '.$yil.' month</small>';
	}
}

?>      
<div class="box box-primary" style="position: relative; left: 0px; top: 0px;">
  <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="ion ion-clipboard"></i>

    <h3 class="box-title">Recent Activities</h3>
           </div>
            <!-- /.box-header -->
  <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <ul class="todo-list ui-sortable">
              <?php		
 foreach($surec as $src) {
	 ?>
                <li>
                  <!-- drag handle -->
                  <span class="handle ui-sortable-handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <!-- checkbox --><!-- todo text -->
                  <span class="text"><?php echo 'In-student student number '.$src['o_id'].' '.$src['islem']; ?></span>
                  <!-- Emphasis label -->
                  
				  <?php
				 
				  $tarih = $src['zaman'];
				  echo timeConvert($tarih);
				 // echo $tarih.'--'.date('d.m.Y H:i:s');

				   ?>
                  
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                
              <?php } ?>  
               
              </ul>
           </div>
          <!-- /.box-body --></div>
        
        
        
        
        
  <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
              <?php echo $ogrenci_sayisi; ?>
			  <sup style="font-size: 20px"></sup></h3>

              <p>Number of Registered Students</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
           <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        
        
<div class="col-lg-3 col-xs-6">        
<div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $ogrenci_sayisi_islemde; ?></h3>

              <p>Number of Applications in Process</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <!--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
          </div>
          
          
          
          <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $ogrenci_sayisi_kabul; ?></h3>

              <p>Number of Accepted Students</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
           <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        
          
        
                

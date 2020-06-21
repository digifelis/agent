<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SIU International Students Office</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
  </head>
  <body>
 <br><br><br><br><br><br>
    <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
				
                    <h3 class="panel-title">Sign In</h3>
                </div>
                
				 
              <?php if(isset($validation_error)){ ?>
                    <div class="alert alert-danger">
                     <?php echo @$validation_error; ?>
                    </div>
			  <?php } ?>

            <?php if($this->session->flashdata('msg')){ ?>
			   <div class="alert alert-danger">
                        <?php echo $this->session->flashdata('msg'); ?>
               </div>
            <?php } ?>

                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo site_url('login/loginControl'); ?>">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
 
 
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Sign in" name="login" >
 
                        </fieldset>
                    </form>
             <!--   <center><b>Not registered ?</b> <br></b><a href="<?php echo base_url('user'); ?>">Register here</a></center> -->
				
				
				<!--for centered text-->
 <!-- şifremi unuttum başlangıcı -->


 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title" id="myModalLabel">Reset your password</h4>
       </div>
       <div class="modal-body">
           <form id="resetPassword" name="resetPassword" method="post" action="<?php echo base_url();?>login/ForgotPassword" onsubmit ='return validate()'>
          <table class="table table-bordered table-hover table-striped">
                     <tbody>
                     <tr>
                     <td>Enter Email: </td>
                     <td>
                 <input type="email" name="email" id="email" style="width:250px" required>
                  </td>
                     <td><input type = "submit" value="submit" class="button"></td>
                     </tr>

                     </tbody>               </table></form>
                                      <div id="fade" class="black_overlay"></div>

         </div>
       <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

       </div>
     </div>
   </div>
 </div>

<br>
<center><a href="#" data-toggle="modal" data-target="#myModal">Forgot Password</a></center>



        <script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
        <script data-require="bootstrap@*" data-semver="3.1.1" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <link data-require="bootstrap-css@3.1.1" data-semver="3.1.1" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />




  <!-- şifremi unuttum bitimi -->







                </div>
            </div>
        </div>
    </div>
</div>
 
 
  </body>
</html>
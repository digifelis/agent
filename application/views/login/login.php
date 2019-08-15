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
 
                </div>
            </div>
        </div>
    </div>
</div>
 
 
  </body>
</html>
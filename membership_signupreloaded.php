<?php
	$app_name = 'Majesty Recruitment System';
	$currDir = dirname(__FILE__);
	include("{$currDir}/language.php");
  include("{$currDir}/incFunctions.php");
	include_once("{$currDir}/title.php");
	include("{$currDir}/dbconnection.php");
	$current_file = $_SERVER['SCRIPT_NAME'];
	$http_referer = $_SERVER['HTTP_REFERER']; 
	
		//@$adminConfig = config('adminConfig');
		

	/*if(!$cg = sqlValue("select count(1) from membership_groups where allowSignup=1")){
		$noSignup = true;
		echo error_message($Translation['sign up disabled']);
		exit;
	}*/



	if(isset($_POST['signUp'])){
		
		// receive data
		@$username = $_POST['username'];
		@$email = $_POST['email'];

		
		//Validate Email
		if(!@$email){
			?>
			<div class="alert alert-danger" style = "margin-left: 50px; margin-right: 50px; "><?php echo $Translation['email invalid'];?></div>
		<?php
		}
	
		@$password = $_POST['password'];
		@$confirmpassword = $_POST['confirmpassword'];

		//Validate Password
	

		//Inserting Image
		@$imagename = addslashes($_FILES["image"]["name"]);
		@$tempname = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
		@$filetype = addslashes($_FILES["image"]["type"]);

		$array = array("jpg", "JPG", "jpeg", "JPEG", "png", "PNG");
		$ext = pathinfo($imagename, PATHINFO_EXTENSION);

		if(!empty($username) && !empty($password)){
			if($password != $confirmpassword){
				?>
				<div class="alert alert-danger" style = "margin-left: 50px; margin-right: 50px; "><?php echo $Translation['password no match'];?></div>
			<?php
			}else{
	
			$username;

			$query = "INSERT Into users VALUES ('', '$username', '$password', '$email')" ;

			$query_run = mysqli_query($link, $query);
				
		  if($query_run){
?>
				<div class="alert alert-danger" style = "margin-left: 50px; margin-right: 50px; background-color: #99ceff"><?php echo '<center><span style = "color: white">Congrats <b>'.$username.'</b> your registration was successful!<br>You can now login.</center>'?></div>
<?php
				  //echo '<center><span style = "color: blue">Congrats <b>'.$username.'</b> your registration was successful!<br>You can now login.</center><hr>';
			}else{
        	echo '<script>alert("Registration Failed")</script>';
      }
		}

	/*	if(!empty($imagename)){
			if(in_array($ext, $array)){
				$query = "INSERT into users(name, image) values ($imagename, $tempname)";
				mysqli_query($link, $query);
			}else{
				echo '<script>alert("Unsupported File format")</script>';
			}
		}*/
	
	}
}

/*
		
		// validate data
        
	
        
		
        
		if(!$email){
			echo $Translation['email invalid'];
			exit;
        }

		if(!sqlValue("select count(1) from membership_groups where groupID='$groupID' and allowSignup=1")){
			echo error_message($Translation['group invalid']);
			exit;
		}

		// save member data
		$needsApproval = sqlValue("select needsApproval from membership_groups where groupID='$groupID'");
		sql("INSERT INTO `membership_users` set memberID='$memberID', passMD5='".md5($password)."', email='$email', signupDate='".@date('Y-m-d')."', groupID='$groupID', isBanned='0', isApproved='".($needsApproval==1 ? '0' : '1')."', custom1='$custom1', custom2='$custom2', custom3='$custom3', custom4='$custom4', comments='member signed up through the registration form.'", $eo);

		// admin mail notification
		/* ---- application name as provided in AppGini is used here ---- 
		$message = nl2br(
			"A new member has signed up for {$app_name}.\n\n" .
			"Member name: {$memberID}\n" .
			"Member group: " . sqlValue("select name from membership_groups where groupID='{$groupID}'") . "\n" .
			"Member email: {$email}\n" .
			"IP address: {$_SERVER['REMOTE_ADDR']}\n" .
			"Custom fields:\n" .
			($adminConfig['custom1'] ? "{$adminConfig['custom1']}: {$custom1}\n" : '') .
			($adminConfig['custom2'] ? "{$adminConfig['custom2']}: {$custom2}\n" : '') .
			($adminConfig['custom3'] ? "{$adminConfig['custom3']}: {$custom3}\n" : '') .
			($adminConfig['custom4'] ? "{$adminConfig['custom4']}: {$custom4}\n" : '')
		);

		if($adminConfig['notifyAdminNewMembers'] == 2 && !$needsApproval){
			sendmail(array(
				'to' => $adminConfig['senderEmail'],
				'subject' => "[{$app_name}] New member signup",
				'message' => $message
			));
		}elseif($adminConfig['notifyAdminNewMembers'] >= 1 && $needsApproval){
			sendmail(array(
				'to' => $adminConfig['senderEmail'],
				'subject' => "[{$app_name}] New member awaiting approval",
				'message' => $message
			));
		}

		// hook: member_activity
		if(function_exists('member_activity')){
			$args = array();
			member_activity(getMemberInfo($memberID), ($needsApproval ? 'pending' : 'automatic'), $args);
		}

		// redirect to thanks page
		$redirect = ($needsApproval ? '' : '?redir=1');
		redirect("membership_thankyou.php$redirect");

		exit;
	}*/
	// drop-down of groups allowing self-signup
	//$groupsDropDown = preg_replace('/<option.*?value=""
	
	?>


	<div class="row" style = 'margin-right: 30px;  margin-top: 70px;'>
		<div class="hidden-xs col-sm-4 col-md-6 col-lg-8" id="signup_splash">
			<!-- customized splash content here -->
			<div class="slideshow" style ='height: 500px; width:auto; margin-left: 200px; border-radius: 30px'>
                <div class="mySlides fade" >
                    
                    <img src="logo.jpg" style="height: 500px; width:auto">
                    <div class="text">    </div>
                  </div>
				  			<div class="mySlides fade" >
                   
                    <img src="8.jpg" style="height: 500px; width:auto">
                    <div class="text">    </div>
                  </div>
				  			<div class="mySlides fade" >
                    
                    <img src="9.jpg" style="height: 500px; width:auto">
                    <div class="text">    </div>
                  </div>
               
        </div>

			<!---<img src ='logo.jpg' style ='height: 500px; width:auto; margin-left: 200px; border-radius: 30px'/>--->
		</div>

		<div class="col-sm-8 col-md-6 col-lg-4">
			<div class="panel panel-success">

				<div class="panel-heading" style = "height: 70px">
					<h1 class="panel-title"><strong><?php echo $Translation['sign up here']; ?></strong></h1>
					<?php //if(sqlValue("select count(1) from membership_groups where allowSignup=1")){ ?>
					<a class="btn btn-success pull-right" href="index.php"><?php echo 'Back To Sign In' ?></a>
				<?php  ?>
				</div>

				<div class="panel-body">
<form method="post" action="membership_signup.php">
						<div class="form-group">
							<label for="username" class="control-label"><?php echo $Translation['username']; ?></label>
							<input style = 'height: 30px; font-size: 15px;' class="form-control input-lg" type="text" required placeholder="<?php echo $Translation['username']; ?>" id="username" name="username">
							<span id="usernameAvailable" class="help-block hidden pull-left"><i class="glyphicon glyphicon-ok"></i> <?php echo str_ireplace(array("'", '"', '<memberid>'), '', $Translation['user available']); ?></span>
							<span id="usernameNotAvailable" class="help-block hidden pull-left"><i class="glyphicon glyphicon-remove"></i> <?php echo str_ireplace(array("'", '"', '<memberid>'), '', $Translation['username invalid']); ?></span>
							<div class="clearfix"></div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="password" class="control-label"><?php echo $Translation['password']; ?></label>
									<input class="form-control" type="password" required="" placeholder="<?php echo $Translation['password']; ?>" id="password" name="password">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="confirmPassword" class="control-label"><?php echo $Translation['confirm password']; ?></label>
									<input class="form-control" type="password" required="" placeholder="<?php echo $Translation['confirm password']; ?>" id="confirmpassword" name="confirmpassword">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="control-label"><?php echo $Translation['email']; ?></label>
							<input class="form-control" type="text" required="" placeholder="<?php echo $Translation['email']; ?>" id="email" name="email">
						</div>
<!---
						<div class="form-group">
							<label for="Profile Picture" class="control-label"><?php //echo 'Profile Picture'; ?></label>
							<input class="form-control" type="file"  placeholder="<?php //echo 'Profile Picture'; ?>" id="image" name="image">
						</div>
-->			
					
<div class="form-group">
					
					<label class="control-label" for="User Type"><?php echo 'User Type' ?></label>
					<select name="cmbUser" id="cmbUser">
						<option value="user" name = "user">Applicant</option>
					</select>

</div>
				

						<div class="row">
							<div class="col-sm-offset-3 col-sm-6">
								<button class="btn btn-primary btn-lg btn-block" value ="signUp" id ="submit" type="submit" name = "signUp"><?php echo $Translation['sign up']; ?></button>
							</div>
						</div>
</form>
				</div> <!-- /div class="panel-body" -->
			</div> <!-- /div class="panel ..." -->
		</div> <!-- /div class="col..." -->
	</div> <!-- /div class="row" -->



<style>
		#usernameAvailable,#usernameNotAvailable{ cursor: pointer; }
</style>

<script>
    var myIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 4000); // Change image every 2 seconds
    }
</script>
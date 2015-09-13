<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  		
  		<title>Landing Page</title>

  		<!-- CSS  -->
      <link href="<?php echo base_url();?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="<?php echo base_url();?>assets/css/dual-sliding-panel.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="<?php echo base_url();?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	</head>

  <body>
   <div class="dual <?php if(!empty($username_err) || !empty($password_err) || !empty($repassword_err) || !empty($firstname_err) || !empty($lastname_err) || !empty($email_err)) echo 'mobile-left' ?> "> <!--menu-->
      <div class="left"> <!--menu__brand-->
         <div class="left-text flow-text hide-on-med-and-down">
            <h1 class="left-align white-text">A Simple Reminder System</h1>
            <br />
            <span>Developed by the Computer Science Students of Technological University of the Philippines Manila</span>
         </div>
         <div class="center-text flow-text hide-on-large-only">
            <h3 class="center-align white-text hide-on-small-only">A Simple Reminder System</h3>
            <h5 class="center-align white-text hide-on-med-only">A Simple Reminder System</h5>
            <span class="center-text">Developed by the Computer Science Students of Technological University of the Philippines Manila</span>
         </div>
      </div>
      <div class="right"> <!--menu__list-->
         <div class="right-text flow-text hide-on-med-and-down">
            <h1 class="left-align white-text">Signing Up is Easy!</h1>
            <br />
            <span>Register an E-Mail Address to Get Started</span>
         </div>
         <div class="center-text flow-text hide-on-large-only">
            <h3 class="center-align white-text hide-on-small-only">Signing Up is Easy!</h3>
            <h5 class="center-align white-text hide-on-med-only">Signing Up is Easy!</h5>
            <span class="center-text">Register an E-Mail Address to Get Started</span>
         </div>
      </div>
   </div>
   <div id="login-signup" <?php if(!empty($username_err) || !empty($password_err) || !empty($repassword_err) || !empty($firstname_err) || !empty($lastname_err) || !empty($email_err)) echo 'class="move-left"' ?> >
      <div class="toplam">
         <div class="sign-up">
            <div class="sign-up-center valign center-align">
               <h4 class="white-text">Sign-Up</h4>
               <form method="post" action="<?php echo base_url(); ?>index.php/Reminder/sign_up">
                  <div class="row">
                     <div class="input-field signup-fields">
                        <input <?php if(!empty($username_err)) echo 'placeholder="'.$username_err.'"'; ?> <?php if(!empty($username) && empty($username_err)) echo 'value="'.$username.'"'; ?> id="username" type="text" class="validate white-text <?php if(!empty($username_err)) echo 'invalid'; ?>" name="username">
                        <label for="username">Username</label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="input-field signup-fields">
                        <input <?php if(!empty($password_err)) echo 'placeholder="'.$password_err.'"'; ?> id="password" type="password" class="validate white-text <?php if(!empty($password_err)) echo 'invalid'; ?>" name="password">
                        <label for="password">Password</label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="input-field signup-fields">
                        <input <?php if(!empty($repassword_err)) echo 'placeholder="'.$repassword_err.'"'; ?> id="repassword" type="password" class="validate white-text <?php if(!empty($repassword_err)) echo 'invalid'; ?>" name="repassword">
                        <label for="repassword">Re-Type Password</label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="input-field signup-fields">
                        <input <?php if(!empty($firstname_err)) echo 'placeholder="'.$firstname_err.'"'; ?> <?php if(!empty($firstname) && empty($firstname_err)) echo 'value="'.$firstname.'"'; ?> id="firstname" type="text" class="validate white-text <?php if(!empty($firstname_err)) echo 'invalid'; ?>" name="firstname">
                        <label for="firstname">First Name</label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="input-field signup-fields">
                        <input <?php if(!empty($lastname_err)) echo 'placeholder="'.$lastname_err.'"'; ?> <?php if(!empty($lastname) && empty($lastname_err)) echo 'value="'.$lastname.'"'; ?> id="lastname" type="text" class="validate white-text <?php if(!empty($lastname_err)) echo 'invalid'; ?>" name="lastname">
                        <label for="lastname">Last Name</label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="input-field signup-fields">
                        <input <?php if(!empty($email_err)) echo 'placeholder="'.$email_err.'"'; ?> <?php if(!empty($email) && empty($email_err)) echo 'value="'.$email.'"'; ?> id="email" type="email" class="validate white-text <?php if(!empty($email_err)) echo 'invalid'; ?>" name="email">
                        <label for="email">E-Mail</label>
                     </div>
                  </div>
                  <button class="btn waves-effect waves-light signup-button" type="submit" name="action">Go!
                  </button>
                  <div class="section">
                     <p class="white-text btn-flat" id="moveright">Already Have An Account?<span class="login-now"> Login </span>Here</p>
                  </div>
               </form>
            </div>
         </div>
         <div class="login">
            <div class="login-center valign center-align">
               <h4 class="white-text">Login</h4>
               <div class="login-fields">
                  <?php
                     if(isset($log_in_err)) echo $log_in_err;
                  ?>
               </div>
               <br />
               <form method="POST" action="<?php echo base_url(); ?>index.php/Reminder/log_in/">
                 <div class="row">
                    <div class="input-field login-fields">
                       <input <?php if(!empty($username_log_err)) echo 'placeholder="'.$username_log_err.'"'; ?> <?php if(!empty($username_log)) echo 'value="'.$username_log.'"'; ?> id="username-log" type="text" class="validate white-text <?php if(!empty($username_log_err)) echo 'invalid'; ?>" name="username_log">
                       <label for="username-log">Username</label>
                    </div>
                 </div>
                 <div class="row">
                    <div class="input-field login-fields">
                       <input <?php if(!empty($password_log_err)) echo 'placeholder="'.$password_log_err.'"'; ?> id="password-log" type="password" class="validate white-text <?php if(!empty($password_log_err)) echo 'invalid'; ?>" name="password_log">
                       <label for="password-log">Password</label>
                    </div>
                 </div>
                 <div class="row">
                   <button class="btn waves-effect waves-light login-button" type="submit" name="action">Go!
                   </button>
                  </div>
                 <div class="section">
                    <p class="white-text btn-flat" id="moveleft">Not Registered Yet?<span class="sign-up-now"> Sign Up </span>Now</p>
                 </div>
                </form>
            </div>
         </div>
      </div>
   </div>

   <!-- Modal Structure -->
  <div id="success" class="modal">
    <div class="modal-content">
      <h4>Sucess!</h4>
      <p>You can now login with the account you registered</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Got it</a>
    </div>
  </div>

    <!-- Javascript  -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/dual-sliding-panel.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>

    <script type="text/javascript">
      $( document ).ready(function() {
        <?php if($success) echo "$('#success').openModal();"; ?>
      });
    </script>

  </body>

</html>
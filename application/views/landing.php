<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  		
  		<title>Landing Page</title>

  		<!-- CSS  -->
		<?php echo 'YOLO'?>
		<?php echo base_url();?>assets/css/materialize.css
      <link href="<?php echo base_url();?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="<?php echo base_url();?>assets/css/dual-sliding-panel.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="<?php echo base_url();?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	</head>

  <body>
    <!-- <nav class="menu">
      <div class="menu__brand">
        <a href=""><div class="logo"></div></a>
      </div>
      <ul class="menu__list">
        <li class="menu__item"><a href="" class="menu__link">Work</a></li>
        <li class="menu__item"><a href="" class="menu__link">About</a></li>
        <li class="menu__item">
          <a href="https://twitter.com/ettrics" target="_blank" class="menu__link menu__link--social"><i class="fa fa-twitter"></i></a>
        </li>
        <li class="menu__item">
          <a href="https://dribbble.com/ettrics" target="_blank" class="menu__link menu__link--social">
            <i class="fa fa-dribbble"></i></a>
        </li>
      </ul>
    </nav> -->
   <div class="dual"> <!--menu-->
      <div class="left"> <!--menu__brand-->
         <div class="left-text flow-text">
            <h1 class="left-align white-text">A Simple Reminder System</h1>
            <br />
            <span>Developed by the Computer Science Students of Technological University of the Philippines Manila</span>
         </div>
      </div>
      <div class="right"> <!--menu__list-->
         <div class="right-text flow-text">
            <h1 class="left-align white-text">Signing Up is Easy!</h1>
            <br />
            <span>Register an E-Mail Address to Get Started</span>
         </div>
      </div>
   </div>
   <div id="login-signup">
      <div class="toplam">
         <div class="sign-up">
            <div class="sign-up-center valign center-align">
               <h4 class="white-text">Sign-Up</h4>
               <div class="row">
                  <div class="input-field signup-fields">
                     <input id="email" type="email" class="validate white-text">
                     <label for="email">E-Mail</label>
                  </div>
               </div>
               <div class="row">
                  <div class="input-field signup-fields">
                     <input id="password" type="password" class="validate white-text">
                     <label for="password">Password</label>
                  </div>
               </div>
               <div class="row">
                  <div class="input-field signup-fields">
                     <input id="password-again" type="password" class="validate white-text">
                     <label for="password-again">Re-Type Password</label>
                  </div>
               </div>
               <button class="btn waves-effect waves-light signup-button" type="submit" name="action">Go!
               </button>
               <div class="section">
                  <p class="white-text btn-flat" id="moveright">Already Have An Account?<span class="login-now"> Login </span>Here</p>
               </div>
            </div>
         </div>
         <div class="login">
            <div class="login-center valign center-align">
               <h4 class="white-text">Login</h4>
               <div class="row">
                  <div class="input-field login-fields">
                     <input id="email" type="email" class="validate white-text ">
                     <label for="email">E-Mail</label>
                  </div>
               </div>
               <div class="row">
                  <div class="input-field login-fields">
                     <input id="password" type="password" class="validate white-text">
                     <label for="password">Password</label>
                  </div>
               </div>
               <button class="btn waves-effect waves-light login-button" type="submit" name="action">Go!
               </button>
               <div class="section">
                  <p class="white-text btn-flat" id="moveleft">Not Registered Yet?<span class="sign-up-now"> Sign Up </span>Now</p>
               </div>
            </div>
         </div>
      </div>
   </div>

    <!-- Javascript  -->
    <script type="<?php echo base_url();?>assets/text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="<?php echo base_url();?>assets/text/javascript" src="js/materialize.min.js"></script>
    <script type="<?php echo base_url();?>assets/text/javascript" src="js/dual-sliding-panel.js"></script>
    <script type="<?php echo base_url();?>assets/text/javascript" src="js/script.js"></script>
  </body>

</html>
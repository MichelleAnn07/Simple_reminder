<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  		
  		<title>Dashboard</title>

  		<!-- CSS  -->
      <link href="<?php echo base_url();?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="<?php echo base_url();?>assets/css/dual-sliding-panel.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="<?php echo base_url();?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<!--
      <style>
      .view{background: #0097A7;}
      .add{background: #00BCD4;}
      .add, .view{
          float: left;
          width: 50%;
          height: 100vh;
          overflow: hidden;
      }
      #accordion {
      list-style: none;
      }

      #accordion li {
      float: left;
      width: 50%;
      height: 100vh;
      overflow: hidden;
      }

      #accordion li.active {
      width: 95%;
      }
      </style>
-->
	</head>

  <body>

   <ul class="collapsible collapsible-accordion" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Add</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>View</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
   </ul>

<!-- Javascript  -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/dual-sliding-panel.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>
  </body>

</html>
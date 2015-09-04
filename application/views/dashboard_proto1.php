<!DOCTYPE html>

<html>

	<head>

		<title>Simple Reminder | Home</title>
	
		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="css/vertical-Accordion.css">
	</head>

<style>
body {
	margin: 0;
}

#container {
	margin: 20px auto;
	width: 980px;
}

#accordion {
	list-style:none;
	margin:30px 0;
	padding:0;
	height:270px;
	width:980px;
	margin:0 0 0 11px;
	border:2px solid #000000;
	overflow:hidden;
}
.panel {
	float:left;
	display:block;
	height:270px;
	width:44px;
	overflow:hidden;
	color:#666666;
	text-decoration:none;
	font-size:16px;
	line-height:1.5em
}
.panel.active {
	width:848px
}

.panelContent {
	padding:15px 15px 15px 55px;
	height:240px;
	width:778px;
}
.pink {
	width:42px;
	height:270px;
	float:left;
	background:url(../images/accordionSprite.png) no-repeat 4px 85px #f980a1;
	border-right:2px solid #ffffff;
	cursor:pointer
}
.dark1 {
	background:url(../images/accordionSprite.png) no-repeat -58px 85px #e66486
}
.dark2 {
	background:url(../images/accordionSprite.png) no-repeat -117px 86px #cf4266
}
.dark3 {
	background:url(../images/accordionSprite.png) no-repeat -184px 87px #b71f45
}
.last {
	border:none
}
.p1 {
	background:url(../images/panel1.jpg) no-repeat left top
}
.p2 {
	background:url(../images/panel1.jpg) no-repeat left top
}
.p3 {
	background:url(../images/panel1.jpg) no-repeat left top
}
.p4 {
	background:url(../images/panel1.jpg) no-repeat left top
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.js"></script>
<script>
$(document).ready(function(){
 
    activePanel = $("#accordion div.panel:first");
    $(activePanel).addClass('active');
 
    $("#accordion").delegate('.panel', 'click', function(e){
         if( ! $(this).is('.active') ){
			$(activePanel).animate({width: "44px"}, 300);
			$(this).animate({width: "848px"}, 300);
			$('#accordion .panel').removeClass('active');
			$(this).addClass('active');
			activePanel = this;
		 };
    });
});
</script>
</head>
<body>
<div id="container">
<div id="accordion">
    <div class="panel">
      <div class="pink"></div>
      <div class="panelContent p1"> <strong>Section 1 Header</strong><br/>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis volutpat quam, non suscipit arcu accumsan at. Aliquam pellentesque.
      </div>
    </div>
    <div class="panel">
      <div class="pink dark1"></div>
      <div class="panelContent p2"> <strong>Section 2 Header</strong><br/>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis volutpat quam, non suscipit arcu accumsan at. Aliquam pellentesque.
      </div>
    </div>
    <div class="panel">
      <div class="pink dark2"></div>
      <div class="panelContent p3"> <strong>Section 3 Header</strong><br/>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis volutpat quam, non suscipit arcu accumsan at. Aliquam pellentesque.
      </div>
    </div>
    <div class="panel">
      <div class="pink dark3"></div>
      <div class="panelContent p4"> <strong>Section 4 Header</strong><br/>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis volutpat quam, non suscipit arcu accumsan at. Aliquam pellentesque.
      </div>
    </div>
</div>
</div>
</body>
		<!--JavaScript-->
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="<?php echo base_url();?>assets/css/hTabMenu.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<nav class="nav nav--active">
  <ul class="nav__list">
    <li class="nav__item">
      <a href="" class="nav__link">
        <div class="nav__thumb color1" data-letter="a"></div>
        <p class="nav__label">About</p>
      </a>
    </li>
    <li class="nav__item">
      <a href="" class="nav__link">
        <div class="nav__thumb color2" data-letter="p"></div>
        <p class="nav__label">Products</p>
      </a>
    </li>
  </ul>
</nav>

<div class="page">
  <section class="section section--active color1" data-letter="a">
    <article class="section__wrapper">
      <h1 class="section__title">About us</h1>
      <p>Use your 'left' and 'right' arrow keys to navigate.<br>Voluptatem necessitatibus aliquid cum repellat nihil praesentium tenetur vel voluptates cumque animi accusantium, deserunt, vitae est. Quas suscipit sint quidem fuga repudiandae.</p>
    </article>
  </section>
  <section class="section color2" data-letter="p">
    <article class="section__wrapper">
      <h1 class="section__title">Products</h1>
      <p>Use your 'left' and 'right' arrow keys to navigate.<br> Quos vel omnis quibusdam at inventore atque assumenda dignissimos ipsa magni perferendis, minima neque saepe reprehenderit quisquam numquam voluptas quo placeat quaerat!</p>
    </article>
  </section>
</div>


</body>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/hTabMenu.js"></script>
</html>
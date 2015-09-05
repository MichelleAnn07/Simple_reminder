<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="<?php echo base_url();?>assets/css/hTabMenu.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url();?>assets/css/lolliclock.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url();?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<nav class="nav nav--active">
  <ul class="nav__list">
    <li class="nav__item">
      <a href="" class="nav__link">
        <div class="nav__thumb color1" data-letter="create"></div>
        <p class="nav__label">Create</p>
      </a>
    </li>
    <li class="nav__item">
      <a href="" class="nav__link">
        <div class="nav__thumb color2" data-letter="view"></div>
        <p class="nav__label">View</p>
      </a>
    </li>
  </ul>
</nav>

<div class="page">
  <section class="section section--active color1" data-letter="a">
    <article class="section__wrapper">
      <h1 class="section__title">Create Reminder</h1>
      <div class="row">
        <form class="col s12">

          <div class="row">
            <div class="input-field col s6">
              <input id="reminder_title" type="text" class="validate">
              <label for="reminder_title">Reminder Title</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <textarea id="reminder_content" class="materialize-textarea"></textarea>
              <label for="reminder_note">Reminder Content</label>
            </div>
          </div>

          <div class="row">
            <div class = "input-field col s12">
              <input id="reminder_date" type="date" class="datepicker">
              <label for="reminder_date">Reminder Date</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input id="reminder_time" type="text" class="lolliclock">
              <label for="reminder_time">Reminder Time</label>
            </div>
          </div>

          <div class="row">
            <button class="btn waves-effect waves-light" type="submit" name="action">Set this Reminder
            <!-- <i class="material-icons right">send</i> -->
            </button>
          </div>

        </form>
      </div>  

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
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/lolliclock.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>
</html>
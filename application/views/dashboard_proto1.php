<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="<?php echo base_url();?>assets/css/hTabMenu.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url();?>assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url();?>assets/css/lolliclock.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<div class="nav nav--active">
  <ul class="nav__list">
    <li class="nav__item">
      <a href="" class="nav__link">
        <div class="nav__thumb color1" data-letter="a"></div>
        <p class="nav__label">Add</p>
      </a>
    </li>
    <li class="nav__item">
      <a href="" class="nav__link">
        <div class="nav__thumb color2" data-letter="v"></div>
        <p class="nav__label">View</p>
      </a>
    </li>
  </ul>
</div>

<div class="page">
  <section class="section section--active color1" data-letter="a">
    <article class="section__wrapper">
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
  <section class="section color2" data-letter="v">
    <article class="section__wrapper">
      <h1 class="section__title">View</h1>
      <p>View Page Here<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </article>
  </section>
</div>

</body>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/hTabMenu.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/lolliclock.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>
</html>
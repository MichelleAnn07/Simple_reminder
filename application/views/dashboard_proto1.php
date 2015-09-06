<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="<?php echo base_url();?>assets/css/hTabMenu.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url();?>assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url();?>assets/css/lolliclock.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url();?>assets/css/materialDesignCard.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url();?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<div class="nav nav--active">
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
</div>

<div class="page">
  <section class="section section--active color1">
    <article class="section__wrapper">
      <div class="row">
        <form method="POST" action="<?php echo base_url(); ?>index.php/Reminder/send_reminder/">
          <div class="row">
            <div class="input-field reminder-fields col s12 m6 l6">
              <input <?php if(!empty($reminder_title_err)) echo 'placeholder="'.$reminder_title_err.'"'; ?> id="reminder_title" type="text" class="validate white-text <?php if(!empty($reminder_title_err)) echo 'invalid'; ?>" name="reminder_title">
              <label for="reminder_title">Reminder Title</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field reminder-fields col s12 m12 l12">
              <textarea <?php if(!empty($reminder_content_err)) echo 'placeholder="'.$reminder_content_err.'"'; ?> id="reminder_content" class="validate reminder-textarea materialize-textarea white-text <?php if(!empty($reminder_content_err)) echo 'invalid'; ?>" name="reminder_content"></textarea>
              <label for="reminder_note">Reminder Content</label>
            </div>
          </div>

            <div class="row">
              <div class = "input-field reminder-fields col s12 m5 l5">
                <input <?php if(!empty($reminder_date_err)) echo 'placeholder="'.$reminder_date_err.'"'; ?> id="reminder_date" type="date" class="validate datepicker white-text <?php if(!empty($reminder_date_err)) echo 'invalid'; ?>" name="reminder_date">
                <label for="reminder_date">Reminder Date</label>
              </div>

              <div class="input-field reminder-fields col s12 offset-m2 m5 offset-l2 l5">
                <input <?php if(!empty($reminder_time_err)) echo 'placeholder="'.$reminder_time_err.'"'; ?> id="reminder_time" type="text" class="validate lolliclock white-text <?php if(!empty($reminder_time_err)) echo 'invalid'; ?>" name="reminder_time">
                <label for="reminder_time">Reminder Time</label>
              </div>
            </div>

            <div class="row">
              <button class="reminder-button btn waves-effect waves-light" type="submit" name="action">Set this Reminder
              <!-- <i class="material-icons right">send</i> -->
            </button>
          </div>
        </form>
      </div>
    </article>
  </section>
  <section class="section color2">
    <article class="section__wrapper">
      <div class="view__wrapper">
        <div class="view">
          <div class="card__full">
            <div class="card__full-top">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path d="M16.59 8.59l-4.59 4.58-4.59-4.58-1.41 1.41 6 6 6-6z"/>
                  <path d="M0 0h24v24h-24z" fill="none"/>
              </svg>
              <span class="card__full-num"></span>
            </div>
            <div class="card__full-bottom">
              <p class="card__full-handle"></p>
              <p class="card__full-info"></p>
            </div>
          </div>
          <div class="card__container"><?php echo date("l").', '.date("jS").' of '.date("F");?></div>
          <ul class="card__list">
            <li class="card__item card__item--blue">
              <div class="card__info">
                <div class="info-player">
                  <p class="info-player__num">9</p>
                  <p class="info-player__name"><small>Tony</small><br>Romo</p>
                </div>
                <div class="info-place">1<sup>st</sup></div>
              </div>
            </li>
            <li class="card__item card__item--purple">
              <div class="card__info">
                <div class="info-player">
                  <p class="info-player__num">18</p>
                  <p class="info-player__name"><small>Tom</small><br>Brady</p>
                </div>
                <div class="info-place">2<sup>nd</sup></div>
              </div>
            </li>
            <li class="card__item card__item--green">
              <div class="card__info">
                <div class="info-player">
                  <p class="info-player__num">12</p>
                  <p class="info-player__name"><small>Aaron</small><br>Rogers</p>
                </div>
                <div class="info-place">3<sup>rd</sup></div>
              </div>
            </li>
            <li class="card__item card__item--yellow">
              <div class="card__info">
                <div class="info-player">
                  <p class="info-player__num">7</p>
                  <p class="info-player__name"><small>Ben</small><br>Roethlisberger</p>
                </div>
                <div class="info-place">4<sup>th</sup></div>
              </div>
            </li>
            <li class="card__item card__item--tan">
              <div class="card__info">
                <div class="info-player">
                  <p class="info-player__num">9</p>
                  <p class="info-player__name"><small>Drew</small><br>Brees</p>
                </div>
                <div class="info-place">5<sup>th</sup></div>
              </div>
            </li>
            <li class="card__item card__item--orange">
              <div class="card__info">
                <div class="info-player">
                  <p class="info-player__num">18</p>
                  <p class="info-player__name"><small>Peyton</small><br>Manning</p>
                </div>
                <div class="info-place">6<sup>th</sup></div>
              </div>
            </li>
          </ul>
          <div class="card__container"><!--div-->Date 2</div>
          <ul class="card__list">
            <li class="card__item card__item--blue">
              <div class="card__info">
                <div class="info-player">
                  <p class="info-player__num">11</p>
                  <p class="info-player__name"><small>Tony</small><br>Romo</p>
                </div>
                <div class="info-place">1<sup>st</sup></div>
              </div>
            </li>
            <li class="card__item card__item--purple">
              <div class="card__info">
                <div class="info-player">
                  <p class="info-player__num">23</p>
                  <p class="info-player__name"><small>Tom</small><br>Brady</p>
                </div>
                <div class="info-place">2<sup>nd</sup></div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </article>
  </section>
</div>

</body>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/hTabMenu.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/lolliclock.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialDesignCard.js"></script>
</html>
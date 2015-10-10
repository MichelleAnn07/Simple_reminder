<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="<?php echo base_url();?>assets/css/hTabMenu.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url();?>assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url();?>assets/css/lolliclock.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url();?>assets/css/materialDesignCard.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url();?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <?php
    $this->load->database();

    $username = $this->session->userdata('username');

    $where = array('username' => $username);
    $this->db->select('reminder_title, reminder_timestamp, reminder_status, reminder_note');
    $this->db->from('reminder');
    $this->db->where($where);
    $result = $this->db->get();
    $dataCtr = 0;
    foreach ($result->result() as $row) {              
      $month = date('F d, Y', strtotime($row->reminder_timestamp));
      $date = date('d', strtotime($row->reminder_timestamp));
      $title = $row->reminder_title;
      $content = $row->reminder_note;
      $myvar[$dataCtr] = array("num"=>$date, "handle"=>$title, "info"=>$content);
      $dataCtr++;
    }
    echo "<script type='text/javascript'>var data = ".json_encode($myvar).";</script>";
  ?>
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

  <div class="burger burger--close">
    <div class="burger__patty"></div>
  </div>
  <div class="logout">
    <form method="POST" action="<?php echo base_url(); ?>index.php/Reminder/log_out"> 
      <button class="btn-flat white-text waves-effect waves-light logout-button" type="submit" name="action">Log out
      </button>
    </form>
  </div>
  <form>  
  </form>
</div>

<div class="page">
  <section class="section section--active color1">
    <article class="section__wrapper">
      <div class="row">
        <form method="POST" action="<?php echo base_url(); ?>index.php/Reminder/save_reminder/">
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

          <ul class="card__list">          
          <?php 
            // include_once("ond/inc/php/connect.php");
            $this->load->database();

            $username = $this->session->userdata('username');
            
            $where = array('username' => $username);
            $this->db->select('reminder_title, reminder_timestamp, reminder_status, reminder_note');
            $this->db->from('reminder');
            $this->db->where($where);
            $result = $this->db->get();

            // echo '<script type="text/javascript">'
            //    , 'jsfunction();'
            //    , '</script>'
            // ;

            //$query = "SELECT reminder_title, reminder_note, reminder_timestamp, reminder_status FROM paginas WHERE username = 'renzoralph07'";
            //$result = mysqli_query($query);

            // while($row = mysqli_fetch_row($result)) {
            // $dataCtr = 0;
            foreach ($result->result() as $row) {              
              $month = date('F d, Y', strtotime($row->reminder_timestamp));
              $date = date('d', strtotime($row->reminder_timestamp));
              $title = $row->reminder_title;
              $content = $row->reminder_note;

              //echo '<div class="card__container">'.$month/** $row->Insert Month Here */.'</div>';
              // echo  '<ul class="card__list">';
              if($row->reminder_status == 'SENT') {
                echo    '<li class="card__item card__item--green">';
              } else {
                echo    '<li class="card__item card__item--orange">';
              }
              echo      '<div class="card__info">';
              echo        '<div class="info-player">';
              echo          '<p class="info-player__num">'/** $row->Insert Date Here */.'</p>';
              echo          '<p class="info-player__name"><small>'. $month .'</small></br>'.$title/** $row->Insert Reminder Title Here */.'</p>';
              echo        '</div>';
              echo      '</div>';
              echo     '</li>';
              
              // $myvar[$dataCtr] = array("num"=>$date, "handle"=>$title, "info"=>$content);
              // $dataCtr++;
              // echo   '</ul>';
              //echo '</div>';
            }
            // echo "<script type='text/javascript'>var data = ".json_encode($myvar).";</script>";
          ?>

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
    
    <script type="text/javascript">
    //   reminders = 
    </script>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialDesignCard.js"></script>
</html>
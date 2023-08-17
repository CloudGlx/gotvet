<?php
$db = db_connect();
$gotvetid = session()->get('GotvetId');
?>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="profile-image">
          <img src="<?= base_url() ?>/public/assets/images/faces/ff.png" alt="image" />
        </div>
        <div class="profile-name">
          <p class="name">
            Welcome
          </p>
          <p class="designation">
            <?= session()->get('FirstName') ?>
          </p>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('stud_dashboard') ?>">
        <i class="fa fa-home menu-icon"></i>
        <span class="menu-title">Home</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
        <i class="fab fa-trello menu-icon"></i>
        <span class="menu-title">Complete profile</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="page-layouts">
        <ul class="nav flex-column sub-menu">
     
          <?php
          $query = $db->query("SELECT * FROM students WHERE Gotvetid=" . $gotvetid . "");
          $row = $query->getRow();
          $level = $row->UpdateLevel;
          ?>

          <?php if ($level==0) : ?>
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?= base_url('update_pd_details/' . $gotvetid) ?>">Personal Detals</a></li>
   
        
          <?php elseif ($level==1) : ?>
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?= base_url('update_edu_details/' . $gotvetid) ?>">Education info</a></li>
          
        

          <?php elseif ($level==2) : ?>
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="#">Activation fee</a></li>
          <?php elseif ($level==3) : ?>

          <?php endif ?>
        

        </ul>
      </div>
    </li>





  </ul>
</nav>
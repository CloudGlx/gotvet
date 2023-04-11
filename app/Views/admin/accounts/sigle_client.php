<?php
$db = db_connect();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin::My Clients</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?=base_url()?>/public/assets/vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/public/assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?=base_url()?>/public/assets/vendors/css/vendor.bundle.addons.css">

  <link rel="stylesheet" href="<?=base_url()?>/public/assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="" />
</head>


<body>
  <div class="container-scroller">

  <?=$this->include('layouts/admin_navbar')?>

    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
   
      <?=$this->include('layouts/admin_leftbar')?>

      <?=$this->include('layouts/admin_sidebar')?>
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">

  <?php if(isset($validation)): ?>
<div class="col-13">
 <div class="alert alert-danger" role="alert">
<?= $validation->listErrors()?>
 </div>
</div>
<?php endif; ?>
<div class="row">
<div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" style="color:crimson;">Account Details</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                    
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td style="color:green; font-weight:bold;">First Name</td>
                          <td style="font-weight:bold;">
                          <?=$data['fname']?>
                         </td>
                       
                        </tr>
                        <tr>
                        <td style="color:green; font-weight:bold;">Second Name</td>
                          <td style="font-weight:bold;"><?=$data['lname']?></td>
                       
                        </tr>
                        <tr>
                        <td style="color:green; font-weight:bold;">Registration number:</td>
                          <td style="font-weight:bold;"><?=$data['registerno']?></td>
                       
                        </tr>
                        <tr>
                        <td style="color:green; font-weight:bold;">Date Created</td>

                    <td style="font-weight:bold;">
                        <?php if (empty($data['date_created'])): ?>
                            N/A
                         <?php else: ?>
                         <?=$data['date_created']?>
                         <?php endif ?>
                    </td>
                       
                    <tr>
                        <td style="color:green; font-weight:bold;">is Verified</td>
                          <td style="font-weight:bold;">
                          <?php if ($data['verified']==1): ?>
                           yes
                         <?php else: ?>
                          No
                         <?php endif ?>
                          </td>
                       
                        </tr>

                        </tr>
                        <tr>
                        <td style="color:green; font-weight:bold;">Last Login</td>
                        <td style="font-weight:bold;"><?=$data['last_login']?></td>
                       
                        </tr>
                     
                      </tbody>
                    </table>

     <?php if ($data['registerno']=='1'): ?>
        <br>        
            <div  class="alert alert-fill-info" role="alert">
           
         </div>

    <a href="<?=base_url('registerno/'.$data['AssetNumber'])?>"> <button class="btn btn-info btn-fw">Return</button> </a>
<?php else: ?> 
     <br>        
                <div class="alert alert-fill-danger" role="alert">
                Suspended this user?
                </div>
<form method="POST" action="#">
           
<button type="submit" class="btn btn-primary mr-2">Suspended</button>
   
    </form>

    <?php endif ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" style="color:darkmagenta;">Contact Information</h4>
                 
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                      <tr>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                 <td style="color:green; font-weight:bold;">Email:</td>
                    <td>   <?=$data['email']?> </td>
                  
                        </tr>

                        <tr>
                 <td style="color:green; font-weight:bold;">Phone:</td>
                    <td> <?=$data['phone']?> </td>
                   </tr>
                         
                   <tr>
                 <td style="color:green; font-weight:bold;">Location:</td>
                    <td> <?=$data['location']?> </td>
                   </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>
</div>
              </div>
            </div>
</div>
     
    <?=$this->include('layouts/footer')?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?=base_url()?>/public/assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?=base_url()?>/public/assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?=base_url()?>/public/assets/js/off-canvas.js"></script>
  <script src="<?=base_url()?>/public/assets/js/hoverable-collapse.js"></script>
  <script src="<?=base_url()?>/public/assets/js/misc.js"></script>
  <script src="<?=base_url()?>/public/assets/js/settings.js"></script>
  <script src="<?=base_url()?>/public/assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?=base_url()?>/public/assets/js/dashboard.js"></script>

</body>
</html>

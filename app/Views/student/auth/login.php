<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Account Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?=base_url()?>/public/assets/vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/public/assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?=base_url()?>/public/assets/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?=base_url()?>/public/assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?=base_url()?>/public/assets/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="<?=base_url()?>/public/assets/images/gologo.png" alt="logo">
              </div>
              <h4>Welcome back!</h4>
              <h6 class="font-weight-light">Happy to see you again!</h6>
 <form class="pt-3" method="POST" action="<?=base_url('std/login')?>">
    <?php if (isset($validation)) : ?>
      <div class="col-13" style="text-align:justify;">
        <div class="alert alert-danger" role="alert">
          <?= $validation->listErrors() ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if (session()->get('success')) : ?>
      <div class="alert alert-success" role="alert">
        <?= session()->get('success') ?>
      </div>
 <?php endif; ?>

                <div class="form-group">
                  <label for="exampleInputEmail">GOTVET ID</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-user text-primary"></i>
                      </span>
                    </div>
                    <input type="number" name="gotvetid" class="form-control form-control-sm border-left-0" id="gotvetid" placeholder="GoTvet id" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-lock text-primary"></i>
                      </span>
                    </div>
                    <input type="password" name="password" class="form-control form-control-sm border-left-0" id="exampleInputPassword" placeholder="Password" required>                        
                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                 
                  <lable class="auth-link text-black" data-toggle="modal" data-target="#password" data-whatever="@getbootstrap">Forgot password?</lable>
                </div>
                <div class="my-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">LOGIN</button>
               
                </div>
                <div class="mb-2 d-flex">
                
                
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="<?=base_url('stud_register')?>" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2023  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>





  <div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Password Reset</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <OL>
            <li>Enter your GOTVETID</li>
           
            <span style="font-weight: bolder; color:red;">A new password will be sent to the phone number you used during the account creation process, via SMS.
            </span>
          </OL>


          <form action="#" method="POST">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">GOTVETID:</label>

              <input type="number" name="gotvetid" class="form-control form-control-sm" id="recipient-name" required>
            </div>
            <button type="submit" name="passreset" class="btn btn-success">Submit</button>
          </form>
        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        </div>


      </div>
    </div>
  </div>









  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?=base_url()?>/public/assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?=base_url()?>/public/assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?=base_url()?>/public/assets/js/off-canvas.js"></script>
  <script src="<?=base_url()?>/public/assets/js/hoverable-collapse.js"></script>
  <script src="<?=base_url()?>/public/assets/js/misc.js"></script>
  <script src="<?=base_url()?>/public/assets/js/settings.js"></script>
  <script src="<?=base_url()?>/public/assets/js/todolist.js"></script>
  <!-- endinject -->
  <script src="<?=base_url()?>/public/assets/js/alerts.js"></script>
 

</body>


</html>

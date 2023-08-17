<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/register-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:54 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Create Account</title>
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
 
              <h6 class="font-weight-light">Join us today! It takes only few steps</h6>

              <?php if (isset($validation)) : ?>
      <div class="col-13" style="text-align:justify;">
        <div class="alert alert-danger" role="alert">
          <?= $validation->listErrors() ?>
        </div>
      </div>
    <?php endif; ?>
              <form class="pt-3" method="post" action="<?=base_url('std/reg')?>">
                <div class="form-group">
                  <label>First Name</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-user text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="First_Name" class="form-control form-control-sm border-left-0" placeholder="First Name As per Id" required>
                  </div>
                </div>
                <div class="form-group">
                  <label>Second Name</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-user text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="Second_Name" class="form-control form-control-sm border-left-0" placeholder="Second Name As per Id">
                  </div>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="far fa-envelope-open text-primary"></i>
                      </span>
                    </div>
                    <input type="email" name="Email" class="form-control form-control-sm border-left-0" placeholder="Email" required>
                  </div>
                </div>

                <div class="form-group">
                  <label>Phone (Safaricom Number recommended)</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="far fa-envelope-open text-primary"></i>
                      </span>
                    </div>
                    <input type="tel" name="Phone" class="form-control form-control-sm border-left-0" placeholder="0712345678" required>
                  </div>
                </div>



                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-lock text-primary"></i>
                      </span>
                    </div>
                    <input type="password" name="Password" class="form-control form-control-sm border-left-0" id="exampleInputPassword" placeholder="Password" required>                        
                  </div>
                </div>

                <div class="form-group">
                  <label>Confirm password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-lock text-primary"></i>
                      </span>
                    </div>
                    <input type="password" name="Confirm_Password" class="form-control form-control-sm border-left-0" id="exampleInputPassword" placeholder="Password" required>                        
                  </div>

                  
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit"> SIGN UP</button>
                
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="<?=base_url('stud_login')?>" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 register-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2023  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
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
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/register-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:54 GMT -->
</html>

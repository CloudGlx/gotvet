<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Edit Personal Details</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url() ?>/public/assets/vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/public/assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?= base_url() ?>/public/assets/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="" />
</head>


<body>
  <div class="container-scroller">



    <?= $this->include('layouts/student_navbar') ?>

    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
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

      <?= $this->include('layouts/leftbar') ?>
      <?= $this->include('layouts/student_sidebar_uncomplete') ?>



      <div class="main-panel">
        <div class="content-wrapper">
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">

                <?php if (isset($validation)) : ?>
                  <div class="col-13">
                    <div class="alert alert-danger" role="alert">
                      <?= $validation->listErrors() ?>
                    </div>
                  </div>
                <?php endif; ?>

                <h4 class="card-title">Personal info</h4>
                <form class="form-sample" method="POST" action="<?= base_url('update/pd') ?>">
                  <div class="alert alert-info" role="alert">
                    Please be informed that once you submit this information, it will be considered official and final, and no further modifications or edits can be made!!
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">First Name<span style="color:red;">*</span></label>
                        <div class="col-sm-9">
                          <input type="text" name="fname" value="<?= $data['FirstName'] ?>" class="form-control form-control-sm" readonly />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Second Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="sname" value="<?= $data['SecondName'] ?>" class="form-control form-control-sm" readonly />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Last Name<span style="color:red;">*</span></label>
                        <div class="col-sm-9">
                          <input type="text" name="lname" value="<?= $data['LastName'] ?>" class="form-control form-control-sm" required />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Home Town</label>
                        <div class="col-sm-9">
                          <input type="text" name="town" value="<?= $data['Town'] ?>" class="form-control form-control-sm" required />
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Gender<span style="color:red;">*</span></label>
                        <div class="col-sm-9">
                          <select class="form-control" name="gender" required>
                            <option value="" selected disabled>Select Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">ID number<span style="color:red;">*</span></label>
                        <div class="col-sm-9">
                          <input class="form-control form-control-sm" type="number" value="<?= $data['Idnumber'] ?>" name="id_number" placeholder="National Id" required />
                          <input class="form-control form-control-sm" type="text" value="<?= $data['GotvetId'] ?>" name="gotvetid" hidden />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input class="form-control form-control-sm" type="email" value="<?= $data['Email'] ?>" name="email" placeholder="Email" readonly />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Citizenship<span style="color:red;">*</span></label>
                        <div class="col-sm-4">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="citizenship" id="membershipRadios1" value="Kenyan" checked>
                              Kenyan
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-5">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="citizenship" id="membershipRadios2" value="Non-Kenyan">
                              Non kenyan
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="card-description" style="color: green;">
                    Address details
                  </p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-9">
                          <input type="text" name="phone" value="<?= $data['Phone'] ?>" class="form-control form-control-sm" readonly />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">County</label>
                        <div class="col-sm-9">
                          <select class="form-control" name="county" required>
                            <option value="" selected disabled>Select County</option>
                            <option value="baringo">Baringo</option>
                            <option value="bomet">Bomet</option>
                            <option value="bungoma">Bungoma</option>
                            <option value="busia">Busia</option>
                            <option value="elgeyo marakwet">Elgeyo Marakwet</option>
                            <option value="embu">Embu</option>
                            <option value="garissa">Garissa</option>
                            <option value="homa bay">Homa Bay</option>
                            <option value="isiolo">Isiolo</option>
                            <option value="kajiado">Kajiado</option>
                            <option value="kakamega">Kakamega</option>
                            <option value="kericho">Kericho</option>
                            <option value="kiambu">Kiambu</option>
                            <option value="kilifi">Kilifi</option>
                            <option value="kirinyaga">Kirinyaga</option>
                            <option value="kisii">Kisii</option>
                            <option value="kisumu">Kisumu</option>
                            <option value="kitui">Kitui</option>
                            <option value="kwale">Kwale</option>
                            <option value="laikipia">Laikipia</option>
                            <option value="lamu">Lamu</option>
                            <option value="machakos">Machakos</option>
                            <option value="makueni">Makueni</option>
                            <option value="mandera">Mandera</option>
                            <option value="meru">Meru</option>
                            <option value="migori">Migori</option>
                            <option value="marsabit">Marsabit</option>
                            <option value="mombasa">Mombasa</option>
                            <option value="muranga">Muranga</option>
                            <option value="nairobi">Nairobi</option>
                            <option value="nakuru">Nakuru</option>
                            <option value="nandi">Nandi</option>
                            <option value="narok">Narok</option>
                            <option value="nyamira">Nyamira</option>
                            <option value="nyandarua">Nyandarua</option>
                            <option value="nyeri">Nyeri</option>
                            <option value="samburu">Samburu</option>
                            <option value="siaya">Siaya</option>
                            <option value="taita taveta">Taita Taveta</option>
                            <option value="tana river">Tana River</option>
                            <option value="tharaka nithi">Tharaka Nithi</option>
                            <option value="trans nzoia">Trans Nzoia</option>
                            <option value="turkana">Turkana</option>
                            <option value="uasin gishu">Uasin Gishu</option>
                            <option value="vihiga">Vihiga</option>
                            <option value="wajir">Wajir</option>
                            <option value="pokot">West Pokot</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>


                  <p class="card-description" style="color: green;">
                    Guardian info
                  </p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Guardian Full Name<span style="color:red;">*</span></label>
                        <div class="col-sm-9">
                          <input type="text" name="grdname" value="<?= $data['Grd_Name'] ?>" class="form-control form-control-sm" required />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Guardian Phone<span style="color:red;">*</span></label>
                        <div class="col-sm-9">
                          <input type="text" name="grdphone" value="<?= $data['Grd_Phone'] ?>" class="form-control form-control-sm" required />
                        </div>
                      </div>
                    </div>
                  </div>

                  <button class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn" type="submit" name="submit">UPDATE</button> <br>
                </form>
              </div>

            </div>
          </div>
        </div>

        <?= $this->include('layouts/footer') ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url() ?>/public/assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= base_url() ?>/public/assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?= base_url() ?>/public/assets/js/off-canvas.js"></script>
  <script src="<?= base_url() ?>/public/assets/js/hoverable-collapse.js"></script>
  <script src="<?= base_url() ?>/public/assets/js/misc.js"></script>
  <script src="<?= base_url() ?>/public/assets/js/settings.js"></script>
  <script src="<?= base_url() ?>/public/assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url() ?>/public/assets/js/dashboard.js"></script>

</body>

</html>
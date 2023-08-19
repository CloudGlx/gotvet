<?php
$db = db_connect();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>GoTvet</title>
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
    <?= $this->include('layouts/admin_navbar') ?>

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
      <?= $this->include('layouts/admin_leftbar') ?>

      <?= $this->include('layouts/admin_sidebar') ?>


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


                <?php if (session()->get('success')) : ?>
                  <div class="alert alert-success" role="alert">
                    <?= session()->get('success') ?>
                  </div>
                <?php endif; ?>

                <?php if (session()->get('error')) : ?>
                  <div class="alert alert-danger" role="alert">
                    <?= session()->get('error') ?>
                  </div>
                <?php endif; ?>

                <div class="row">
                  <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title" style="color:crimson;">Personal Details</h4>
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>

                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td style="color:green; font-weight:bold;">Name</td>
                                <td style="font-weight:bold; font-size:smaller;">
                                  <?= $data['FirstName'] ?> <?= $data['SecondName'] ?> <?= $data['LastName'] ?>
                                </td>
                              </tr>


                              <tr>
                                <td style="color:green; font-weight:bold;">Phone</td>
                                <td style="font-weight:bold;"><?= $data['Phone'] ?>

                                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#sms" data-whatever="@mdo">send sms</button>
                                </td>
                              </tr>
                              <tr>
                                <td style="color:green; font-weight:bold;">Email</td>
                                <td style="font-weight:bold;"><?= $data['Email'] ?></td>

                              </tr>

                              <tr>
                                <td style="color:green; font-weight:bold;">Gender</td>
                                <td style="font-weight:bold;"><?= $data['Gender'] ?></td>

                              </tr>
                              <tr>
                                <td style="color:green; font-weight:bold;">County</td>
                                <td style="font-weight:bold;"><?= $data['County'] ?></td>

                              </tr>
                              <tr>
                                <td style="color:green; font-weight:bold;">Town</td>
                                <td style="font-weight:bold;"><?= $data['Town'] ?></td>

                              </tr>
                    

                              <tr>
                                <td style="color:green; font-weight:bold;">Account Status</td>
                                <td style="font-weight:bold;">
                                  <?php if ($data['UpdateLevel'] == 0) : ?>
                                    Uncomplete
                                  <?php elseif ($data['UpdateLevel'] == 1) : ?>
                                    Education Details Missing
                                  <?php elseif ($data['UpdateLevel'] == 2) : ?>
                                   Payments Pending
                                  <?php elseif ($data['UpdateLevel'] == 3) : ?>
                                   Completed
                                  <?php endif ?>
                                </td>

                              </tr>

                            </tbody>
                          </table>


                          <?php if ($data['isenrolled'] == '1') : ?>


                            <br>
                            <div class="alert alert-fill-info" role="alert">
                              Student approved
                            </div>


                          <?php else : ?>
                            <br>
                            <div class="alert alert-fill-danger" role="alert">
                              Pending..
                            </div>
                            <form method="POST" action="<?= base_url('std/status') ?>">

                              <input type="text" name="reqid" value="<?= $data['isenrolled'] ?>" hidden />

                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status<span style="color:red;"> </span></label>

                                <div class="col-sm-9">
                                  <select class="form-control" name="status" required>
                                    <option value="" selected disabled> Update status</option>
                                    <option value="1">Approved</option>
                                    <option value="2">Deferred</option>
                                    <option value="3">Rejected</option>
                                  </select>
                                </div>
                              </div>

                              <button type="submit" class="btn btn-primary mr-2">Submit</button>

                            </form>

                          <?php endif ?>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title" style="color:darkmagenta;">Education Details</h4>

                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                              <tr>


                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td style="color:rgb(255,0,255); font-weight:bold;">Primay school:</td>
                                <td style="font-weight:bold;">
                                  <?= $data['FormerPrimay'] ?>
                                </td>

                              </tr>

                              <tr>
                                <td style="color:rgb(255,0,255); font-weight:bold;">High school:</td>
                                <td style="font-weight:bold;">
                                  <?= $data['FormerSec'] ?>
                                </td>

                              </tr>

                              <tr>
                                <td style="color:rgb(255,0,255); font-weight:bold;">KCPE Results:</td>
                                <td style="font-weight:bold;">
                                  <?= $data['KcseResults'] ?>
                                </td>

                              </tr>

                              <tr>
                                <td style="color:rgb(255,0,255); font-weight:bold;">KCSE Results:</td>
                                <td style="font-weight:bold;">
                                  <?= $data['KcpeResults'] ?>
                                </td>

                              </tr>


                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- SMS MODAL START-->
                  <div class="modal fade" id="sms" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="ModalLabel">New message</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="<?= base_url('send/sigle_sms') ?>">
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Sender Id:</label>
                              <select class="form-control form-control-sm" id="senderid" name="senderid">
                                <option>GoTvet</option>
                                <option>GtnTv</option>
                                <option>CloudGalaxy</option>

                              </select>
                            </div>

                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Recipient:</label>
                              <input type="text" class="form-control form-control-sm" aria-label="" value=" <?= $data['Phone'] ?> " name="phone" readonly>
                              <input type="number" value="<?= $data['StudentID'] ?>" name="studentid" hidden>
                            </div>
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Message:</label>
                              <textarea class="form-control" rows="4" cols="50" id="message-text" name="smsbody" required></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                          <button type="submit" name="submit" class="btn btn-success">Send message</button>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        </div>
                        </form>

                      </div>
                    </div>
                  </div>
                  <!-- SMS MODAL ENDS-->
                </div>
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
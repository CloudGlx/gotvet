<?php
$db = db_connect();
//$isprofilecomplete = session()->get('isprofilecompleted');
$uplevel = session()->get('UpdateLevel');
$gotvetid = session()->get('GotvetId');

$query = $db->query("SELECT * FROM students WHERE Gotvetid=" . $gotvetid . "");
$row = $query->getRow();
$level = $row->UpdateLevel;
$isprofilecomplete = $row->isprofilecompleted;
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home</title>
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
    <!-- partial:partials/_navbar.html -->


    <?= $this->include('layouts/student_navbar') ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
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


      <!-- partial -->
      <?= $this->include('layouts/leftbar') ?>

      <?php if ($isprofilecomplete == 0) : ?>
        <?= $this->include('layouts/student_sidebar_uncomplete') ?>


      <?php elseif ($isprofilecomplete == 1) : ?>

        <?= $this->include('layouts/student_sidebar') ?>

      <?php endif ?>
      <?php if ($isprofilecomplete == 0) : ?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title" style="font-size: medium;">
                <div class="alert alert-danger" role="alert">

                  To gain complete access to all features, we kindly ask you to complete the account registration process. Please note that a fee of KSH 500 will be charged!!
                </div>
              </h3>

            </div>
            <?php if (session()->get('success')) : ?>
              <div class="alert alert-success" role="alert">
                <?= session()->get('success') ?>
              </div>
            <?php endif; ?>
            <div class="row grid-margin">
              <div class="col-12">
                <div class="card card-statistics">
                  <div class="card-body">
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">


                      <?php if ($level == 0) : ?>


                        <div class="statistics-item">
                          <p style="font-weight: 100;">
                            <i class="icon-sm fa fa-user mr-2"></i>
                            Personal Details
                          </p>

                          <h2>
                            <?php

                            ?>
                          </h2>
                          <?php if ($level == 1 || $level == 2 || $level == 3) : ?>
                            <label class="badge badge-outline-success badge-pill">Updated</label>
                          <?php else : ?>
                            <a href="<?= base_url('update_pd_details/' . $gotvetid) ?>"> <label class="badge badge-outline-danger badge-pill">Complete Registartion</label> </a>

                          <?php endif ?>
                        </div>


                      <?php elseif ($level == 1) : ?>
                        <div class="statistics-item">
                          <p>
                            <i class="icon-sm fa fa-graduation-cap mr-2"></i>
                            Edutation details
                          </p>
                          <?php if ($level == 2 || $level == 3) : ?>
                            <label class="badge badge-outline-success badge-pill">Updated</label>
                          <?php else : ?>
                            <a href="<?= base_url('update_edu_details/' . $gotvetid) ?>"> <label class="badge badge-outline-danger badge-pill">Complete Registartion</label></a>
                          <?php endif ?>
                        </div>
                      <?php elseif ($level == 2) : ?>

                        <div class="statistics-item">
                          <p>
                            <i class="icon-sm fa fa-credit-card mr-2"></i>
                            Payments
                          </p>
                          <lable type="button" class="badge badge-outline-success badge-pill" data-toggle="modal" data-target="#payments" data-whatever="@getbootstrap">Pay Activation fee</lable>
                        </div>
                      <?php endif ?>


                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">
                      <i class="fas fa-table"></i>
                      STUDENT DETAILS
                    </h4>
                    <div class="table-responsive">
                      <?php
                      $gotvetid = session()->get('GotvetId');
                      $query = $db->query("SELECT * FROM students WHERE Gotvetid=" . $gotvetid . "");
                      ?>

                      <table class="table">
                        <thead>
                          <tr class="bg-warning text-black">
                            <th>NAME</th>
                            <th>GotvetID</th>
                            <th>Phone No</th>
                            <th>Date Created</th>

                          </tr>
                        </thead>

                        <tbody>
                          <?php $i = 1;
                          foreach ($query->getResult('array') as $row) : ?>
                            <tr>

                              <td><?= $row['FirstName'] . " " . $row['SecondName'] . " " . $row['LastName'] ?> </td>
                              <td><?= $row['GotvetId'] ?></td>
                              <td><?= $row['Phone'] ?></td>
                              <td><?= $row['DateCreated'] ?></td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>


                      </table>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      <?php elseif ($isprofilecomplete == 1) : ?>


        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title" style="font-size: medium;">
                AVAILABLE GOTVET LEARNING INSTITUTIONS AND PROGRAMMES
              </h3>

            </div>
            <?php if (session()->get('success')) : ?>
              <div class="alert alert-success" role="alert">
                <?= session()->get('success') ?>
              </div>
            <?php endif; ?>
            <div class="row grid-margin">
              <div class="col-12">
                <div class="card card-statistics">
                  <div class="card-body">
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fa fa-graduation-cap mr-2"></i>

                          Public Universities
                        </p>

                        <h2><?php

                            $query = $db->query('SELECT * FROM institutions WHERE Category=1 AND Type=1');
                            echo $query->getNumRows();
                            ?></h2>
                        <a href="#"> <label class="badge badge-outline-success badge-pill">View</label> </a>
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fa fa-graduation-cap mr-2"></i>

                          Private Universities
                        </p>
                        <h2><?php
                            $query = $db->query('SELECT * FROM institutions WHERE Category=1 AND Type=2');
                            echo $query->getNumRows();
                            ?></h2>
                        <a href="#"> <label class="badge badge-outline-danger badge-pill">View</label></a>
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fa fa-graduation-cap mr-2"></i>

                          Public Colleges
                        </p>
                        <h2><?php
                            $query = $db->query('SELECT * FROM institutions WHERE Category=2 AND Type=1');
                            echo $query->getNumRows();
                            ?></h2>
                        <a href="#"> <label class="badge badge-outline-success badge-pill">View</label> </a>
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fa fa-graduation-cap mr-2"></i>

                          Private Colleges
                        </p>
                        <h2><?php
                            $query = $db->query('SELECT * FROM institutions WHERE Category=2 AND Type=2');
                            echo $query->getNumRows();
                            ?></h2>
                        <a href="#"> <label class="badge badge-outline-success badge-pill">View</label></a>
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-shopping-basket mr-2"></i>
                          My Basket
                        </p>
                        <h2><?php
                            $query = $db->query('SELECT * FROM int_selection ');
                            echo $query->getNumRows();
                            ?></h2>
                        <a href="#"> <label class="badge badge-outline-success badge-pill">Open</label></a>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">

              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">
                      <i class="fas fa-table"></i>
                      Account Details
                    </h4>
                    <div class="table-responsive">
                      <?php
                      $gotvetid = session()->get('GotvetId');
                      $query = $db->query("SELECT * FROM students WHERE Gotvetid=" . $gotvetid . "");
                      ?>

                      <table class="table">
                        <thead>

                        </thead>

                        <tbody>
                          <?php $i = 1;
                          foreach ($query->getResult('array') as $row) : ?>
                            <tr>
                              <td style="font-weight: bold;">NAME:</td>
                              <td><?= $row['FirstName'] . " " . $row['SecondName'] . " " . $row['LastName'] ?> </td>
                            </tr>

                            <tr>
                              <td style="font-weight: bold;">GOTVETID: </td>
                              <td><?= $row['GotvetId'] ?></td>
                            </tr>

                            <tr>
                              <td style="font-weight: bold;">Phone: </td>
                              <td><?= $row['Phone'] ?></td>
                            </tr>


                            <tr>
                              <td style="font-weight: bold;">Email: </td>
                              <td><?= $row['Email'] ?></td>
                            </tr>

                          <?php endforeach; ?>
                        </tbody>


                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              $gotvetid = session()->get('GotvetId');
              $query = $db->query("SELECT * FROM EducationDetails WHERE Gotvetid=" . $gotvetid . "");
              ?>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Education</h4>
                    <table class="table">
                      <tbody>
                        <?php $i = 1;
                        foreach ($query->getResult('array') as $row) : ?>
                          <tr>
                            <td style="font-weight: bold;">MEAN GRADE:</td>
                            <td><?= $row['KcseMeanGrade'] ?></td>
                          </tr>

                          <tr>
                            <td style="font-weight: bold;">KCSE YEAR: </td>
                            <td><?= $row['KcseYear'] ?></td>
                          </tr>

                          <tr>
                            <td style="font-weight: bold;">Index Number: </td>
                            <td><?= $row['KcseIndex'] ?></td>
                          </tr>



                        <?php endforeach; ?>
                      </tbody>


                    </table>

                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      <?php endif ?>

    </div>
  </div>

  </div>


  <div class="modal fade" id="payments" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">How to Pay Using M-PESA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <OL>
            <li>Go to your <span style="color:green; font-weight:bold;">Lipa na M-PESA Menu</span></li>
            <li>Select Pay Bill</li>
            <li>Enter Business Number: <span style="color:green; font-weight:bold;">4118527</span>

            </li>
            <li>For the Account Number, enter your GOTVET ID: <span style="font-weight: bold;"> <?php echo $gotvetid; ?></span></li>
            <li>Enter Amount: <span style="color:green; font-weight:bold;">KSH 500</span>
            <li>Enter your M-PESA PIN and Send.</li>
            <span style="font-weight: bolder; color:red;">Upon successful payment, you'll get an activation code via SMS from "GOTVET". Enter it below and click "Activate".
              If no code received, use M-Pesa confirmation code.</span>
          </OL>


          <form action="acc_activate" method="POST">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Activation Code/Mpesa Code:</label>

              <input type="number" name="activationcode" class="form-control form-control-sm" id="recipient-name" required>
            </div>
            <button type="submit" class="btn btn-success">Activate</button>
          </form>
        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        </div>


      </div>
    </div>
  </div>


  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
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
  <script src="<?= base_url() ?>/public/assets/js/modal-demo.js"></script>
  <script src="<?= base_url() ?>/public/assets/js/clipboard.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url() ?>/public/assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>


</html>
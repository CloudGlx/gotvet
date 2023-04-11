<?php
$db = db_connect();
$orderid = session()->get('orderid');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin:View Order</title>
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
                        <h4 class="card-title" style="color:crimson;">Order Details</h4>
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>

                              </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="color:green; font-weight:bold;">Place By</td>
                                <td style="font-weight:bold;">
                                  <?= $data['FirstName'].' '.$data['LastName'] ?>
                                  <a href="<?= base_url('view_client/'.$data['ClientId']) ?>"> <i class="fa fa-eye"></i> </a>
                                </td>

                              </tr>
                            <tr>
                                <td style="color:green; font-weight:bold;">Email</td>
                                <td style="font-weight:bold;">
                                  <?= $data['Email'] ?>
                                </td>

                              </tr>
                              <tr>
                                <td style="color:green; font-weight:bold;">Order Id</td>
                                <td style="font-weight:bold;">
                                  <?= $data['OrderId'] ?>
                                </td>

                              </tr>
                              <tr>
                                <td style="color:green; font-weight:bold;">Academic Level</td>
                                <td style="font-weight:bold;">
                                  <?= $data['AcademicLevel'] ?>
                                </td>

                              </tr>
                              <tr>
                                <td style="color:green; font-weight:bold;">Paper Type</td>

                                <td style="font-weight:bold;">
                                  <?php if (empty($data['PaperType'])) : ?>
                                    N/A
                                  <?php else : ?>
                                    <?= $data['PaperType'] ?>
                                  <?php endif ?>
                                </td>

                              </tr>
                              <tr>
                                <td style="color:green; font-weight:bold;">Subject</td>
                               <td style="font-weight:bold;">
                                  <?php if (empty($data['Subject'])) : ?>
                                    N/A
                                  <?php else : ?>
                                    <?= $data['Subject'] ?>
                                  <?php endif ?>
                                </td>

                              </tr>
                              <tr>
                                <td style="color:green; font-weight:bold;">Title</td>
                                <td style="font-weight:bold;">
                                  <?php if (empty($data['Title'])) : ?>
                                    N/A
                                  <?php else : ?>
                                    <?= $data['Title'] ?>
                                  <?php endif ?>
                                </td>

                              </tr>
                              <tr>
                                <td style="color:green; font-weight:bold;">Paper Format</td>

                                <td style="font-weight:bold;">
                                  <?php if (empty($data['PaperFormat'])) : ?>
                                    N/A
                                  <?php else : ?>
                                    <?= $data['PaperFormat'] ?>
                                  <?php endif ?>
                                </td>

                              </tr>
                              <tr>
                                <td style="color:green; font-weight:bold;">Pages</td>

                                <td style="font-weight:bold;">
                                  <?php if (empty($data['Pages'])) : ?>
                                    N/A
                                  <?php else : ?>
                                    <?= $data['Pages'] ?>
                                  <?php endif ?>
                                </td>

                              </tr>
                              <tr>
                                <td style="color:green; font-weight:bold;">Spacing</td>

                                <td style="font-weight:bold;">
                                  <?php if (empty($data['Spacing'])) : ?>
                                    N/A
                                  <?php else : ?>
                                    <?= $data['Spacing'] ?>
                                  <?php endif ?>
                                </td>
                              </tr>
                              <tr>
                                <td style="color:green; font-weight:bold;">Status</td>
                                <td style="font-weight:bold;">
                                  <?php if ($data['OrderStatus'] == 0) : ?>
                                <td><label class="btn btn-outline-warning btn-fw">Pending</label></td>
                              <?php elseif ($data['OrderStatus'] == 1) : ?>
                                <td><label class="btn btn-outline-info btn-fw">In Progress</label></td>
                              <?php elseif ($data['OrderStatus'] == 2) : ?>
                                <td><label class="btn btn-outline-danger btn-fw">Rejected</label></td>
                              <?php elseif ($data['OrderStatus'] == 4) : ?>
                                <td><label class="btn btn-outline-success btn-fw">Completed</label></td>
                              <?php elseif ($data['OrderStatus'] == 3) : ?>
                                <td><label class="btn btn-outline-warning btn-fw">In Revision</label></td>
                                <?php elseif ($data['OrderStatus'] == 5) : ?>
                                <td><label class="btn btn-outline-danger btn-fw">Cancelled</label></td>
                              <?php else : ?>
                                <td><label class="badge badge-success badge-pill">N/A</label></td>
                              <?php endif ?>
                              </td>
                              </tr>
                              
                              <?php if ($data['OrderStatus'] == 1 || $data['OrderStatus'] == 3 || $data['OrderStatus'] == 4 || $data['OrderStatus'] == 0): ?>
                              <tr>
                                <td style="color:green; font-weight:bold;">Payments</td>
                                <td style="font-weight:bold;">
                                  <?php if ($data['PaymentStatus'] == 0): ?>
                                <td><a href="<?=base_url('update/payments')?>"><label class="btn btn-danger btn-fw">Set as paid</label></a></td>
                              <?php elseif ($data['PaymentStatus'] == 1) : ?>
                                <td><label class="btn btn-success btn-fw">Paid</label></td>
                              <?php endif ?>
                              </td>
                              </tr>
                              <?php endif ?>
                            </tbody>
                          </table>
                          <?php if ($data['OrderStatus'] == '0' || $data['OrderStatus'] == '1' || $data['OrderStatus'] == '3') : ?>
                            <br>
                    
                      <div class="alert alert-fill-primary" role="alert">
                            Update Order status 
                            </div>
               
                <form action="<?=base_url('update/status')?>" method="POST">
                  <div class="form-group">
                    <label>Select order Satus</label>
                    <select class="js-example-basic-single w-100" name="status" required>
                   <option value="" selected disabled>Update Status</option>
                   <?php if ($data['OrderStatus'] == 0): ?>
                      <option value="1">Approved</option>
                      <option value="2">Rejected</option>
                      <option value="3">In Revision</option>
                      <option value="4">Completed</option>
                      <option value="5">Canceled</option>
                      <?php elseif ($data['OrderStatus']==1): ?>
                        <option value="3">In Revision</option>
                        <option value="4">Completed</option>
                        <?php elseif ($data['OrderStatus']==3): ?>
                        <option value="4">Completed</option>
                      <?php endif ?>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-info btn-fw">Update</button>
                  </form>  
                          <?php endif ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                      <h4 class="card-title" style="color:darkmagenta;">Order Description</h4>
                       
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <?php if (empty($data['Description'])) : ?>
                                    N/A
                                  <?php else : ?>
                                    <?= $data['Description'] ?>
                                  <?php endif ?>
                                </td>
                              </tr>

                            </tbody>
                          </table>
                        </div>

                        <?php if ($data['OrderStatus'] == 0 || $data['OrderStatus'] == 1 || $data['OrderStatus'] == 2 || $data['OrderStatus'] == 3 || $data['OrderStatus'] == 4 || $data['OrderStatus'] == 5) : ?>
                        <h4 class="card-title" style="color:Green;">Received Files</h4>
                          <div class="table-responsive">
                            <?php
                            $query = $db->query("SELECT * FROM files WHERE OrderId=$orderid ORDER BY ID DESC");
                            ?>
                            <table class="table table-hover">
                              <thead>
                                <tr class="bg-info text-white">
                                  <th>id</th>
                                  <th>File</th>
                                  <th>Download</th>
                                </tr>
                              </thead>

                              <tbody>
                                <?php $i = 1;
                                foreach ($query->getResult('array') as $row) : ?>
                                  <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?= $row['FileNewName'] ?></td>
                                    <td>
                                      <a href="<?=base_url('download_file/'.$row['FileId'])?>">
                                      <button type="button" class="btn btn-outline-success btn-icon-text">
                                        <i class="fa fa-download btn-icon-prepend"></i>
                                      
                                      </button>
                                     </a>
                                    </td>
                                  </tr>
                                <?php endforeach; ?>
                              </tbody>
                            </table>
                          </div>

                         <?php elseif ($data['OrderStatus'] == 4) : ?>

                          <h4 class="card-title" style="color:Green;">Upload Files</h4>
                          <div class="table-responsive">
                            <?php
                            $query = $db->query("SELECT * FROM files WHERE OrderId=$orderid AND FromAdmin=1 ORDER BY ID DESC");
                            ?>
                            <table class="table table-hover">
                              <thead>
                                <tr class="bg-info text-white">
                                  <th>id</th>
                                  <th>File</th>
                                  <th>Action</th>

                                </tr>
                              </thead>

                              <tbody>
                                <?php $i = 1;
                                foreach ($query->getResult('array') as $row) : ?>
                                  <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?= $row['FileNewName'] ?></td>
                                    <td>
                                      <a href="<?=base_url('delete_file/'.$row['FileId'])?>">
                                      <button type="button" class="btn btn-outline-danger btn-icon-text">
                                        <i class="fa fa-trash btn-icon-prepend"></i>
                                        Upload
                                      </button>
                                     </a>
                                    </td>
                                  </tr>
                                <?php endforeach; ?>
                              </tbody>
                            </table>      
                          </div>
                           
                         <?php endif ?>
                      </div>
      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?= $this->include('layouts/footer') ?>
        <!-- partial -->
      </div>
  </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url() ?>/public/assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= base_url() ?>/public/assets/vendors/js/vendor.bundle.addons.js"></script>

  <script src="<?= base_url() ?>/public/assets/js/off-canvas.js"></script>
  <script src="<?= base_url() ?>/public/assets/js/hoverable-collapse.js"></script>
  <script src="<?= base_url() ?>/public/assets/js/misc.js"></script>
  <script src="<?= base_url() ?>/public/assets/js/settings.js"></script>
  <script src="<?= base_url() ?>/public/assets/js/todolist.js"></script>
  <script src="<?= base_url() ?>/public/assets/js/dashboard.js"></script>
</body>

</html>
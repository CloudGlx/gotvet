<?php
$db = db_connect();
$id = session()->get('regnum');
$email = session()->get('email');
?>


<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>All Orders</title>
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


    <!-- partial:../../partials/_navbar.html -->

    <?= $this->include('layouts/navbar') ?>
    <!-- partial -->



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

      <!-- partial -->
      <?= $this->include('layouts/leftbar') ?>

      <?= $this->include('layouts/sidebar') ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Pending Orders
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('order_new') ?>">New Order</a></li>

                <li class="breadcrumb-item active" aria-current="page">Orders</li>
              </ol>
            </nav>
          </div>

          <?php if (session()->get('success')) : ?>
            <div class="alert alert-success" role="alert">
              <?= session()->get('success') ?>
            </div>
          <?php endif; ?>


          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Pending Orders</h4>

              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <?php
                    $query = $db->query("SELECT * FROM orders WHERE ClientId=$id AND OrderStatus='0' ORDER BY id DESC");
                    ?>
                    <table id="order-listing" class="table">
                      <thead>
                        <tr class="bg-primary text-white">
                          <th>Id</th>
                          <th>OrderId</th>
                          <th>Acad Level</th>
                          <th>PaperType</th>
                          <th>Buget</th>
                          <th>Add Files</th>
                          <th>View</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1;
                        foreach ($query->getResult('array') as $row) : ?>
                          <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?= $row['OrderId'] ?></td>
                            <td><?= $row['AcademicLevel'] ?></td>
                            <td><?= $row['PaperType'] ?></td>
                            <td><?= $row['ApproximatePrice'] ?></td>
                            <td> 
                      <a href="<?= base_url('file_upload/'.$row['OrderId']) ?>">
                        <button type="button" class="btn btn-outline-danger btn-icon-text">
                          <i class="fa fa-upload btn-icon-prepend"></i>                                                    
                          Upload
                        </button>
                      </a>
                            </td>

                            <td>
                              <a href="<?= base_url('orderview/' . $row['OrderId']) ?>"> <i class="fa fa-eye"></i> </a>
                            </td>
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
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
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
  <!-- inject:js -->
  <script src="<?= base_url() ?>/public/assets/js/off-canvas.js"></script>
  <script src="<?= base_url() ?>/public/assets/js/hoverable-collapse.js"></script>
  <script src="<?= base_url() ?>/public/assets/js/misc.js"></script>
  <script src="<?= base_url() ?>/public/assets/js/settings.js"></script>
  <script src="<?= base_url() ?>/public/assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url() ?>/public/assets/js/data-table.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
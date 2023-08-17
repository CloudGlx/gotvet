<?php
$db = db_connect();
$gotvetid = session()->get('GotvetId');
?>


<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin::All_Insituts</title>
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
            <?= $this->include('layouts/student_sidebar') ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
             All Institutes
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">GoTvet</a></li>

                <li class="breadcrumb-item active" aria-current="page">All</li>
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
       
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">

                    
                    <table id="order-listing" class="table">
                      <thead>
                        <tr class="bg-info text-white">
                          <th>Id</th>
                          <th>PROGRAMME NAME</th>                        
                          <th>CLUSTER/GROUP</th>
                       
                        
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1;
                         foreach ($data as $row) :?>
                          <tr>
                            
                            <td><?php echo $i++ ?></td>
                        <td> <a href="<?= base_url('Prog_view/' . $row['Code']) ?>" style="color: black;"><?= $row['Name'] ?></a> </td> 
                        
                            <td>
                              <?php if ($row['Cluster'] == 1) : ?>
                                <label>Education & Related</label>
                              <?php elseif ($row['Cluster'] == 2) : ?>
                                <label>Business & Related</label>
                              <?php elseif ($row['Cluster'] == 3) : ?>
                                <label>Building, Construction & Related</label>
                                <?php else : ?>
                                <label class="badge badge-warning">Inactive</label>
                                
                              <?php endif ?>
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
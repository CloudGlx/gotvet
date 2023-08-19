<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Programmes</title></title>
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
            <?= $this->include('layouts/student_sidebar') ?>
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
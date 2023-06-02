<?php
$db = db_connect();
$id = session()->get('regnum');
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin::Home</title>
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


        <?= $this->include('layouts/admin_navbar') ?>

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
            <?= $this->include('layouts/admin_leftbar') ?>
            <?= $this->include('layouts/admin_sidebar') ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            Dashboard
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
                                                <i class="icon-sm fa fa-user mr-2"></i>
                                                Total vistors
                                            </p>

                                            <h2><?php

                                                $query = $db->query('SELECT * FROM orders');
                                                echo $query->getNumRows();
                                                ?></h2>
                                            <a href="#"> <label class="badge badge-outline-success badge-pill">View Staff</label> </a>
                                        </div>
                                        <div class="statistics-item">
                                            <p>
                                                <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                                                Insitutes
                                            </p>
                                            <h2><?php
                                                $query = $db->query('SELECT * FROM institutes');
                                                echo $query->getNumRows();
                                                ?></h2>
                                            <a href="<?= base_url('all_insitutes') ?>"> <label class="badge badge-outline-danger badge-pill">View</label></a>
                                        </div>
                                        <div class="statistics-item">
                                            <p>
                                                <i class="icon-sm fas fa-check-circle mr-2"></i>
                                                Accounts
                                            </p>
                                            <h2><?php
                                                $query = $db->query('SELECT * FROM orders WHERE OrderStatus=4');
                                                echo $query->getNumRows();
                                                ?></h2>
                                            <a href="<?= base_url('') ?>"> <label class="badge badge-outline-success badge-pill">Completed</label> </a>
                                        </div>
                                        <div class="statistics-item">
                                            <p>
                                                <i class="icon-sm fas fa-edit mr-2"></i>
                                                Enrolled
                                            </p>
                                            <h2><?php
                                                $query = $db->query('SELECT * FROM orders WHERE OrderStatus=3');
                                                echo $query->getNumRows();
                                                ?></h2>
                                            <a href="<?= base_url('') ?>"> <label class="badge badge-outline-success badge-pill">View</label></a>
                                        </div>
                                        <div class="statistics-item">
                                            <p>
                                                <i class="icon-sm fas fa-circle-notch mr-2"></i>
                                                Approved
                                            </p>
                                            <h2><?php
                                                $query = $db->query('SELECT * FROM orders WHERE OrderStatus=2');
                                                echo $query->getNumRows();
                                                ?></h2>
                                            <a href="<?= base_url('') ?>"> <label class="badge badge-outline-success badge-pill">Rejected</label></a>
                                        </div>
                                        <div class="statistics-item">
                                            <p>

                                                <i class="icon-sm fas fa-times mr-2"></i>
                                                Rejected
                                            </p>
                                            <h2><?php
                                                $query = $db->query('SELECT * FROM orders WHERE OrderStatus=5');
                                                echo $query->getNumRows();
                                                ?></h2>
                                            <a href=""> <label class="badge badge-outline-danger badge-pill">View </label></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <i class="fas fa-envelope"></i>
                                        latest Accounts
                                    </h4>
                                    <div class="table-responsive">


                                        <?php
                                        $query = $db->query("SELECT * FROM students WHERE id >=0 ORDER BY ID DESC LIMIT 3");
                                        ?>
                                        <table id="order-listing" class="table">
                                            <thead>
                                                <tr class="bg-info text-white">
                                                     <th>Id</th>
                                                    <th>FirstName</th>
                                                    <th>LastName</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>

                                                    <th>View</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1;
                                                foreach ($query->getResult('array') as $row) : ?>
                                                    <tr>
                                                        <td><?php echo $i++ ?></td>
                                                        <td><?= $row['FirstName'] ?></td>
                                                        <td><?= $row['SecondName'] ?></td>
                                                        <td><?= $row['Phone'] ?></td>

                                                        <td><?= $row['Email'] ?></td>
                                                   


                                                        <td>
                                                            <a href="<?= base_url('view_student/' . $row['StudentID']) ?>"> <i class="fa fa-eye"></i></a>
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
                    <div class="row">
                        <div class="col-md-8 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <i class="fas fa-table"></i>
                                        Recent Registration
                                    </h4>
                                    <div class="table-responsive">
                                        <?php
                                        $query = $db->query("SELECT * FROM orders WHERE OrderId<=9 LIMIT 4");
                                        ?>

                                        <table class="table">
                                            <thead>
                                                <tr class="bg-primary text-white">
                                                    <th>Id</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Balance</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php $i = 1;
                                                foreach ($query->getResult('array') as $row) : ?>
                                                    <tr>
                                                        <td><?php echo $i++ ?></td>
                                                        <td><?= $row['pname'] ?></td>
                                                        <td><?= $row['category'] ?></td>

                                                        <td>
                                                            <?php if (intval($row['pcount']) <= 0) : ?>
                                                                <label class="badge badge-danger"> <?= $row['pcount'] ?> </label>

                                                            <?php elseif ($row['pcount'] <= 9) : ?>
                                                                <label class="badge badge-warning"> <?= $row['pcount'] ?></label>
                                                            <?php elseif ($row['pcount'] >= 10) : ?>
                                                                <label class="badge badge-success"><?= $row['pcount'] ?> </label>
                                                            <?php endif ?>
                                                        </td>

                                                        <td>
                                                            <a href="<?= base_url('prodaccum/' . $row['pid']) ?>"> <button class="btn btn-outline-primary">Add</button></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <i class="fas fa-calendar-alt"></i>
                                        Calendar
                                    </h4>
                                    <div id="inline-datepicker-example" class="datepicker"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?= base_url() ?>/public/assets/js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>


</html>
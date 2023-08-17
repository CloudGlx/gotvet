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
    <title>GoTvet | Programmes</title>
    </title>
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
        <!-- partial:../partials/_navbar.html -->
        <?= $this->include('layouts/student_navbar') ?>


        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../partials/_settings-panel.html -->
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

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">

                        <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title" style="color:green;">DIPLOMA PROGRAMMES</h4>
                                        <i class="fas fa-ellipsis-v"></i>
                                    </div>

                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "80"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Law </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=0');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>


                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "81"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Education & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=1');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>


                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "82"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Business & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=2');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>


                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "83"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Building, Construction & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=3');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>




                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "84"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Engineering, Technology & Related</p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=4');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>



                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "85"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Environmental Sciences </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=5');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>

                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "86"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Applied Sciences </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=6');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>

                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "87"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Health Sciences & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=7');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>

                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "88"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Food Science & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=8');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>

                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "89"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Nutrition & Dietetics </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=9');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>

                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "810"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Social Sciences </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=10');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>

                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "811"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Computing, IT & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=11');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>

                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "812"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Clothing, Fashion & Textile</p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=12');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>

                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "813"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Agricultural Sciences & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=13');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>

                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "814"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Natural Sciences & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=14');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>

                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "815"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Tax & Custom Administration </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=15');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "816"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Graphics, Media Studies, Media Production & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=16');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>

                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "817"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Hospitality, Hotel, Tourism, & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=17');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "818"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Technical Courses </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=18');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "819"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Animal Health and Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=19');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>

                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "820"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Hair Dressing & Beauty Therapy </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=20');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "821"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Library & Information Science </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=21');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>

                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "822"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Primary & Early Childhood Teacher Education </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=22');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>


                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "823"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Animal Health and Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=0 AND Cluster=23');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--CERTIFICATE PROGRAMMES start -->


                        <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title" style="color:green;">CERTIFICATE PROGRAMMES</h4>
                                        <i class="fas fa-ellipsis-v"></i>
                                    </div>


                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "10"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Law </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=0');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>


                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "11"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Education & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=1');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>

                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "12"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Business & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=2');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>


                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "13"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Building, Construction & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=3');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>

                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "14"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Engineering, Technology & Related</p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=4');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "15"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Environmental Sciences </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=5');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "16"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Applied Sciences </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=6');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "17"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Health Sciences & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=7');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "18"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Food Science & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=8');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "19"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Nutrition & Dietetics </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=9');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "110"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Social Sciences </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=10');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "111"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Computing, IT & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=11');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "112"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Clothing, Fashion & Textile</p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=12');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "113"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Agricultural Sciences & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=13');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "114"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Natural Sciences & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=14');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "115"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Tax & Custom Administration </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=15');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "116"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Graphics, Media Studies, Media Production & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=16');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>

                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "117"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Hospitality, Hotel, Tourism, & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=17');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "118"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Technical Courses </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=18');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "119"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Animal Health and Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=19');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "120"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Hair Dressing & Beauty Therapy </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=20');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "121"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Library & Information Science </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=21');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "122"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Primary & Early Childhood Teacher Education </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=22');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "123"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Animal Health and Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=1 AND Cluster=23');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--ARTISAN PROGRAMMES START -->


                        <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title" style="color:green;">ARTISAN PROGRAMMES</h4>
                                        <i class="fas fa-ellipsis-v"></i>
                                    </div>

<!--
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "20"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Law </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=0');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>


                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "21"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Education & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=1');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
-->
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "22"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Business & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=2');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>


                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "23"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Building, Construction & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=3');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>

                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "24"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Engineering, Technology & Related</p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=4');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>

<!--

                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "25"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Environmental Sciences </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=5');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "26"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Applied Sciences </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=6');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "27"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Health Sciences & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=7');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>


-->



                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "28"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Food Science & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=8');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "29"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Nutrition & Dietetics </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=9');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "210"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Social Sciences </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=10');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "211"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Computing, IT & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=11');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "212"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Clothing, Fashion & Textile</p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=12');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "213"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Agricultural Sciences & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=13');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "214"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Natural Sciences & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=14');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "215"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Tax & Custom Administration </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=15');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "216"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Graphics, Media Studies, Media Production & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=16');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>

                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "217"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Hospitality, Hotel, Tourism, & Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=17');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "218"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Technical Courses </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=18');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "219"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Animal Health and Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=19');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "220"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Hair Dressing & Beauty Therapy </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=20');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>

<!--
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "221"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Library & Information Science </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=21');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "222"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Primary & Early Childhood Teacher Education </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=22');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
                                    <div class="wrapper d-flex align-items-center py-1 border-bottom">
                                        <?php $pg = "223"; ?>
                                        <a href="<?= base_url('programmes_view/' . $pg) ?>" style="color: black;">
                                            <p class="mb-0">Animal Health and Related </p>
                                        </a>
                                        <span class="badge badge-pill badge-info ml-auto px-1 py-1">
                                            <?php
                                            $query = $db->query('SELECT * FROM courses WHERE Level=2 AND Cluster=23');
                                            echo $query->getNumRows();
                                            ?>
                                            </i></span>
                                    </div>
-->
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
    <!-- plugins:js -->
    <script src="<?= base_url() ?>/public/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= base_url() ?>/public/assets/vendors/js/vendor.bundle.addons.js"></script>

    <script src="<?= base_url() ?>/public/assets/js/off-canvas.js"></script>
    <script src="<?= base_url() ?>/public/assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url() ?>/public/assets/js/misc.js"></script>
    <script src="<?= base_url() ?>/public/assets/js/settings.js"></script>
    <script src="<?= base_url() ?>/public/assets/js/todolist.js"></script>

</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/widgets.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:10:42 GMT -->

</html>
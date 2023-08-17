<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Education Details</title>
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

                                <h4 class="card-title" style="color:green">Education background</h4>
                                <form class="form-sample" method="POST" action="<?= base_url('update/edu') ?>">
                                    <div class="alert alert-info" role="alert">
                                        Please be informed that once you submit this information, it will be considered official and final, and no further modifications or edits can be made!!
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Former primary<span style="color:red;">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="formerpri" value="<?= $data['FormerPrimay'] ?>" class="form-control form-control-sm" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Former High school<span style="color:red;">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="formersec" value="<?= $data['FormerSec'] ?>" class="form-control form-control-sm" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">KCPE Mean Grade<span style="color:red;">*</span></label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="kcpegrade" required>
                                                        <option value="" selected disabled>Select KCPE grade</option>
                                                        <option>A</option>
                                                        <option>A-</option>
                                                        <option>B+</option>
                                                        <option>B</option>
                                                        <option>C+</option>
                                                        <option>C-</option>
                                                        <option>D+</option>
                                                        <option>D</option>
                                                        <option>D-</option>
                                                        <option>E</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">KCSE Mean Grade</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="kcsegrade" required>
                                                        <option value="" selected disabled>Select KCSE grade</option>
                                                        <option>A</option>
                                                        <option>A-</option>
                                                        <option>B+</option>
                                                        <option>B</option>
                                                        <option>C+</option>
                                                        <option>C-</option>
                                                        <option>D+</option>
                                                        <option>D</option>
                                                        <option>D-</option>
                                                        <option>E</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">KCSE INDEX<span style="color:red;">*</span></label>
                                                <div class="col-sm-9">

                                                    <input class="form-control form-control-sm" type="number" min="100" value="<?= $data['KcseIndex'] ?>" name="kcseindex" placeholder="KCSE INDEX" required />
                                                    <input class="form-control form-control-sm" type="text" value="<?= $data['GotvetId'] ?>" name="gotvet" hidden />

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">KCSE Year<span style="color:red;">*</span></label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="kcseyear" required>
                                                        <?php
                                                        $currentYear = date("Y");
                                                        for ($year = $currentYear; $year >= 1990; $year--) {
                                                            echo "<option value='$year'>$year</option>";
                                                        }
                                                        ?>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title" style="color:green;">kcse results</h4>
                                            <p class="card-description" style="color: red;">
                                                Core Subjects
                                            </p>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label>ENG:101</label>
                                                    <select class="form-control" name="eng" required>
                                                        <option value="" selected disabled>Select KCSE grade</option>
                                                        <option>A</option>
                                                        <option>A-</option>
                                                        <option>B+</option>
                                                        <option>B</option>
                                                        <option>C+</option>
                                                        <option>C-</option>
                                                        <option>D+</option>
                                                        <option>D</option>
                                                        <option>D-</option>
                                                        <option>E</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label>KIS:102</label>
                                                    <select class="form-control" name="kis" required>
                                                        <option value="" selected disabled>Select subject grade</option>
                                                        <option>A</option>
                                                        <option>A-</option>
                                                        <option>B+</option>
                                                        <option>B</option>
                                                        <option>C+</option>
                                                        <option>C-</option>
                                                        <option>D+</option>
                                                        <option>D</option>
                                                        <option>D-</option>
                                                        <option>E</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label>MAT:121</label>
                                                    <select class="form-control" name="math" required>
                                                        <option value="" selected disabled>Select subject grade</option>
                                                        <option>A</option>
                                                        <option>A-</option>
                                                        <option>B+</option>
                                                        <option>B</option>
                                                        <option>C+</option>
                                                        <option>C-</option>
                                                        <option>D+</option>
                                                        <option>D</option>
                                                        <option>D-</option>
                                                        <option>E</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <p class="card-description" style="color: red;">
                                                Sciences
                                            </p>

                                            <div class="form-group row">
                                                <div class="col">
                                                    <label>Physics</label>
                                                    <select class="form-control" name="phy">
                                                        <option value="" selected disabled>Select KCSE grade</option>
                                                        <option>A</option>
                                                        <option>A-</option>
                                                        <option>B+</option>
                                                        <option>B</option>
                                                        <option>C+</option>
                                                        <option>C-</option>
                                                        <option>D+</option>
                                                        <option>D</option>
                                                        <option>D-</option>
                                                        <option>E</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label>Chemistry</label>
                                                    <select class="form-control" name="chem">
                                                        <option value="" selected disabled>Select KCSE grade</option>
                                                        <option>A</option>
                                                        <option>A-</option>
                                                        <option>B+</option>
                                                        <option>B</option>
                                                        <option>C+</option>
                                                        <option>C-</option>
                                                        <option>D+</option>
                                                        <option>D</option>
                                                        <option>D-</option>
                                                        <option>E</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col">
                                                    <label>Biology</label>
                                                    <select class="form-control" name="bio">
                                                        <option value="" selected disabled>Select subject grade</option>
                                                        <option>A</option>
                                                        <option>A-</option>
                                                        <option>B+</option>
                                                        <option>B</option>
                                                        <option>C+</option>
                                                        <option>C-</option>
                                                        <option>D+</option>
                                                        <option>D</option>
                                                        <option>D-</option>
                                                        <option>E</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <p class="card-description" style="color: red;">
                                                Humanities
                                            </p>


                                            <div class="form-group row">
                                                <div class="col">
                                                    <label>History</label>
                                                    <select class="form-control" name="his">
                                                        <option value="" selected disabled>Select KCSE grade</option>
                                                        <option>A</option>
                                                        <option>A-</option>
                                                        <option>B+</option>
                                                        <option>B</option>
                                                        <option>C+</option>
                                                        <option>C-</option>
                                                        <option>D+</option>
                                                        <option>D</option>
                                                        <option>D-</option>
                                                        <option>E</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label>Geograpy</label>
                                                    <select class="form-control" name="geo">
                                                        <option value="" selected disabled>Select KCSE grade</option>
                                                        <option>A</option>
                                                        <option>A-</option>
                                                        <option>B+</option>
                                                        <option>B</option>
                                                        <option>C+</option>
                                                        <option>C-</option>
                                                        <option>D+</option>
                                                        <option>D</option>
                                                        <option>D-</option>
                                                        <option>E</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col">
                                                    <label>CRE</label>
                                                    <select class="form-control" name="cre">
                                                        <option value="" selected disabled>Select KCSE grade</option>
                                                        <option>A</option>
                                                        <option>A-</option>
                                                        <option>B+</option>
                                                        <option>B</option>
                                                        <option>C+</option>
                                                        <option>C-</option>
                                                        <option>D+</option>
                                                        <option>D</option>
                                                        <option>D-</option>
                                                        <option>E</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <p class="card-description" style="color: red;">
                                                Applied Technical
                                            </p>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label>Computer Studies</label>
                                                    <select class="form-control" name="comp">
                                                        <option value="" selected disabled>Select KCSE grade</option>
                                                        <option>A</option>
                                                        <option>A-</option>
                                                        <option>B+</option>
                                                        <option>B</option>
                                                        <option>C+</option>
                                                        <option>C-</option>
                                                        <option>D+</option>
                                                        <option>D</option>
                                                        <option>D-</option>
                                                        <option>E</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label>Home Science</label>
                                                    <select class="form-control" name="hs">
                                                        <option value="" selected disabled>Select KCSE grade</option>
                                                        <option>A</option>
                                                        <option>A-</option>
                                                        <option>B+</option>
                                                        <option>B</option>
                                                        <option>C+</option>
                                                        <option>C-</option>
                                                        <option>D+</option>
                                                        <option>D</option>
                                                        <option>D-</option>
                                                        <option>E</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col">
                                                    <label>Agriculture</label>
                                                    <select class="form-control" name="agri">
                                                        <option value="" selected disabled>Select KCSE grade</option>
                                                        <option>A</option>
                                                        <option>A-</option>
                                                        <option>B+</option>
                                                        <option>B</option>
                                                        <option>C+</option>
                                                        <option>C-</option>
                                                        <option>D+</option>
                                                        <option>D</option>
                                                        <option>D-</option>
                                                        <option>E</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col">
                                                    <label>Business Studies</label>
                                                    <select class="form-control" name="bs">
                                                        <option value="" selected disabled>Select KCSE grade</option>
                                                        <option>A</option>
                                                        <option>A-</option>
                                                        <option>B+</option>
                                                        <option>B</option>
                                                        <option>C+</option>
                                                        <option>C-</option>
                                                        <option>D+</option>
                                                        <option>D</option>
                                                        <option>D-</option>
                                                        <option>E</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn" type="submit" name="submit">SUBMIT</button> <br>
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
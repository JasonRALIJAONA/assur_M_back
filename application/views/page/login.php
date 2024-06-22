<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assur'M</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo site_url('assets/vendors/feather/feather.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/vendors/mdi/css/materialdesignicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/vendors/ti-icons/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/vendors/typicons/typicons.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/vendors/simple-line-icons/css/simple-line-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/vendors/css/vendor.bundle.base.css'); ?>">
    
    <link rel="stylesheet" href="<?php echo site_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/js/select.dataTables.min.css'); ?>">
    <!-- End plugin css for this page -->
    
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo site_url('assets/css/vertical-layout-light/style.css'); ?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo site_url('assets/images/logoAssurM.png'); ?>" />

    <style>
        body {
            background: linear-gradient(to r ight, #ff7e5f, #feb47b);
            height: 100vh;
            display: center;
            align-items: center;
            justify-content: center;
        }
        .auth-form-light {
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            border-radius: 8px;
        }
        .brand-logo img {
            width: 100px;
            display: block;
            margin: 0 auto 20px;
        }
        .form-control {
            border-radius: 20px;
        }
        .btn-primary {
            background-color: #ff7e5f;
            border-color: #ff7e5f;
            border-radius: 20px;
        }
        .btn-primary:hover {
            background-color: #feb47b;
            border-color: #feb47b;
        }
        .form-check-label {
            cursor: pointer;
        }
    </style>

</head>
<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="<?php echo site_url('assets/images/received_367917859557251.png'); ?>" alt="logo">
                            </div>
                            <h6 class="fw-light">Log in</h6>

                            <form class="pt-3" action="<?php echo site_url('login/seconnecter'); ?> " method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" name="mail" id="identifiant" placeholder="Email" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="mdp" name="mdp" placeholder="Password" value="">
                                </div>

                                    <?php if (isset($error)): ?>
                                        <p style="color: red;"><?php echo $error; ?></p>
                                    <?php endif; ?>
                                    <?php if (isset($valid)): ?>
                                        <p style="color: green;"><?php echo $valid; ?></p>
                                    <?php endif; ?>

                                <div class="mt-3">
                                    <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="LOG IN">
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            Keep me signed in
                                        </label>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
</body>
</html>

<?php var_dump($statistiques); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assur'M</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo site_url('assets/vendors/feather/feather.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/vendors/mdi/css/materialdesignicons.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/vendors/ti-icons/css/themify-icons.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/vendors/typicons/typicons.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/vendors/simple-line-icons/css/simple-line-icons.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/vendors/css/vendor.bundle.base.css');?>">
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo site_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/js/select.dataTables.min.css');?>">
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo site_url('assets/css/vertical-layout-light/style.css');?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo site_url('assets/images/logoAssurM.png');?>" />
    <style>
        .hidden {
            display: none;
        }
        .form-container {
            position: absolute;
            top: 0;
            right: 0;
            width: 30%;
            height: 100%;
            background-color: #fff;
            border-left: 1px solid #ccc;
            padding: 20px;
            overflow-y: auto;
        }
        @media (max-width: 768px) {
            .form-container {
                width: 100%;
                height: auto;
                position: relative;
                border-left: none;
                border-top: 1px solid #ccc;
            }
        }

        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        #chartContainer {
            width: 70%;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container-scroller">
        <!-- Navbar -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <a class="navbar-brand brand-logo" href="#">
                    <img src="<?php echo site_url('assets/images/logoAssurM.png');?>" alt="logo" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="#">
                    <img src="<?php echo site_url('assets/images/received_367917859557251.png');?>" alt="logo" />
                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top">
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                        <h1 class="welcome-text">La page accueil <span class="text-black fw-bold">Administrateur</span></h1>
                        <h3 class="welcome-sub-text">Tout pour satisfaire le client</h3>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item d-none d-lg-block">
                        <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                            <span class="input-group-addon input-group-prepend border-right">
                                <span class="icon-calendar input-group-text calendar-icon"></span>
                            </span>
                            <input type="text" class="form-control">
                        </div>
                    </li>
                    <li class="nav-item">
                        <form class="search-form" action="#">
                            <i class="icon-search"></i>
                            <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                        </form>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                            <i class="icon-mail icon-lg"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="icon-bell"></i>
                            <span class="count"></span>
                        </a>
                    </li>
                    <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                        <p>Afaka asina zavatra hafa</p>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="right-sidebar" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- partial -->
            <!-- Sidebar -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-category">Crud</li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('login/accueil');?>">
                            <i class="menu-icon mdi mdi-account-multiple"></i>
                            <span class="menu-title">Utilisateur</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('vehicule/index'); ?>">
                            <i class="menu-icon mdi mdi-car"></i>
                            <span class="menu-title">Vehicule</span>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#" >
                            <i class="menu-icon mdi mdi-car"></i>
                            <span class="menu-title">Type de Vehicule</span>
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('assureur/index'); ?>">
                            <i class="menu-icon mdi mdi-security"></i>
                            <span class="menu-title">Assureur</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('facture/index'); ?>" >
                            <i class="menu-icon mdi mdi-clipboard-text"></i>
                            <span class="menu-title">Facture</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('operateur/index'); ?>">
                            <i class="menu-icon mdi mdi-sim"></i>
                            <span class="menu-title">Operateur</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Statistique</li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="menu-icon mdi mdi-file-document"></i>
                            <span class="menu-title">Assurance le plus utilise</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >
                            <i class="menu-icon mdi mdi-elevation-rise"></i>
                            <span class="menu-title">Frequence de paiment</span>
                        </a>
                    </li>

                    <li class="nav-item nav-category">Autres</li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >
                        <i class="menu-icon mdi mdi-headphones"></i>
                        <span class="menu-title">Service Client</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <!-- Content -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- Table and form go here -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h1>Assurance les plus Utilisee</h1>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- content-wrapper ends -->
                <!-- Footer -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright over here</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>


</body>
</html>

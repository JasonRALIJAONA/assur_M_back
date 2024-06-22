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

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination a {
            color: black;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
            margin: 0 4px;
            border: 1px solid #ddd;
        }

        .pagination a.active {
            background-color: #4CAF50;
            color: white;
            border: 1px solid #4CAF50;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }
    </style>

<style>
        
    </style>
</head>

<body>
    
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
                    <h1 class="welcome-text">La page de l' <span class="text-black fw-bold">Administrateur</span></h1>
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
            <div></div>

            
    <style>    
        .sidebar {
            position: fixed;
            top: 100;
            left: 0;
            height: 100%;
            width: 250px;
            overflow-y: auto;
            background-color: #fff;
            border-radius: 20px; 
            border-style: collapse;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            z-index: 1000;
        }

        .container-scroller {
            margin-left: 250px;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .container-scroller {
                margin-left: 200px;
            }
        }
    </style>

</head>
<body>
    <!-- Sidebar -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">

    
        <ul class="nav">

        <li class="nav-item nav-category"></li>
            <li class="nav-item">
                <a class="nav-link" href="#" >
                <i class="menu-icon mdi mdi-home"></i>
                <span class="menu-title">Dashboard</span>
                </a>
        </li>
        
        <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('rechercheCtrl/index'); ?>" >
                <i class="menu-icon mdi mdi-magnify"></i>
                <span class="menu-title">Recherche</span>
                </a>
        </li>

            <li class="nav-item nav-category">Crud</li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('login/accueil');?>">
                    <i class="menu-icon mdi mdi-account-multiple"></i>
                    <span class="menu-title">Utilisateur</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('vehiculeCtrl/index'); ?>">
                    <i class="menu-icon mdi mdi-car"></i>
                    <span class="menu-title">Vehicule</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('assureurCtrl/index'); ?>">
                    <i class="menu-icon mdi mdi-security"></i>
                    <span class="menu-title">Assureur</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('factureCtrl/index'); ?>" >
                    <i class="menu-icon mdi mdi-clipboard-text"></i>
                    <span class="menu-title">Facture</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('operateurCtrl/index'); ?>">
                    <i class="menu-icon mdi mdi-sim"></i>
                    <span class="menu-title">Operateur</span>
                </a>
            </li>
            <li class="nav-item nav-category">Statistique</li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('statistiqueCtrl/index'); ?>">
                    <i class="menu-icon mdi mdi-file-document"></i>
                    <span class="menu-title">Assurance le plus utilise</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('FrequenceCtrl/index'); ?>" >
                    <i class="menu-icon mdi mdi-elevation-rise"></i>
                    <span class="menu-title">Frequence de payement</span>
                </a>
            </li>


        </ul>
    </nav>

    <!-- Contenu principal -->
    <div class="container-scroller">
        <!-- Ajoutez le contenu de votre page ici -->
    </div>
</body>
</html>


<!-- Content -->
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Table and form go here -->
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recherche Multicritère</h4>
                        <form method="post" action="<?php echo site_url('rechercheCtrl/search'); ?>">
                            <div class="form-group">
                                <label for="police_assurance">Police d'assurance:</label>
                                <input type="text" id="police_assurance" name="police_assurance" class="form-control" value="<?php echo isset($_POST['police_assurance']) ? $_POST['police_assurance'] : ''; ?>">
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="date_debut" class="form-label">Entre Date :</label>
                                    <input type="date" id="date_debut" name="date_debut" class="form-control" value="<?php echo isset($_POST['date_debut']) ? $_POST['date_debut'] : ''; ?>">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="date_fin" class="form-label"> et Date  :</label>
                                    <input type="date" id="date_fin" name="date_fin" class="form-control" value="<?php echo isset($_POST['date_fin']) ? $_POST['date_fin'] : ''; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="numero_immatriculation">Numéro d'immatriculation:</label>
                                <input type="text" id="numero_immatriculation" name="numero_immatriculation" class="form-control" value="<?php echo isset($_POST['numero_immatriculation']) ? $_POST['numero_immatriculation'] : ''; ?>">
                            </div>
                            <div class="form-group">
                                <label for="nom_utilisateur">Nom de l'utilisateur:</label>
                                <input type="text" id="nom_utilisateur" name="nom_utilisateur" class="form-control" value="<?php echo isset($_POST['nom_utilisateur']) ? $_POST['nom_utilisateur'] : ''; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Rechercher</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Résultats de la Recherche</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date Début</th>
                                        <th>Date Fin</th>
                                        <th>Police d'assurance</th>
                                        <th>Assureur</th>
                                        <th>Véhicule</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($results)): ?>
                                    <?php foreach ($results as $result): ?>
                                    <tr>
                                        <td><?php echo $result['date_debut']; ?></td>
                                        <td><?php echo $result['date_fin']; ?></td>
                                        <td><?php echo $result['police_assurance']; ?></td>
                                        <td><?php echo $result['assureur_nom']; ?></td>
                                        <td><?php echo $result['vehicule_marque']; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php else: ?>
                                    <tr>
                                        <td colspan="5">Aucun résultat trouvé.</td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->



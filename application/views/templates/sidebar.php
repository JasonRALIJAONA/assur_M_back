
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

    <!-- Contenu principal -->
    <div class="container-scroller">
        <!-- Ajoutez le contenu de votre page ici -->
    </div>
</body>
</html>

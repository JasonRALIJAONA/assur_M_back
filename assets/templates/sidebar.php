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
                        <a class="nav-link" href="<?php echo site_url('statistique/assurance_plus_utilise/6/2024'); ?>">
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
                </ul>
            </nav>
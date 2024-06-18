<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Véhicules</title>
    
</head>
<body>
    <!-- Content -->
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Table and form go here -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Liste des Vehicules</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Immatriculation</th>
                                            <th>Puissance</th>
                                            <th>Marque</th>
                                            <th>Places</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($vehicules as $vehicule): ?>
                                        <tr>
                                            <td><?php echo $vehicule['id']; ?></td>
                                            <td><?php echo $vehicule['immatriculation']; ?></td>
                                            <td><?php echo $vehicule['puissance']; ?> cv</td>
                                            <td><?php echo $vehicule['marque']; ?></td>
                                            <td><?php echo $vehicule['place']; ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div id="editFormContainer" class="form-container hidden"></div>
                            <div class="pagination">
                                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                    <a href="<?php echo site_url('vehiculeCtrl/index/' . $i); ?>" class="<?php echo ($i == $current_page) ? 'active' : ''; ?>"><?php echo $i; ?></a>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- Footer -->
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
</body>
</html>

            <!-- Content -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- Table and form go here -->
                    <div class="row">
                        <div class="col-10">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Les Factures</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <!-- <th>ID</th> -->
                                                    <th>Date Début</th>
                                                    <th>Date Fin</th>
                                                    <th>Police d'assurance</th>
                                                    <th>ID de l'assureur</th>
                                                    <th>ID du véhicule</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($factures as $facture): ?>
                                                <tr>
                                                    <!-- <td><?php echo $facture['id']; ?></td> -->
                                                    <td><?php echo $facture['date_debut']; ?></td>
                                                    <td><?php echo $facture['date_fin']; ?></td>
                                                    <td><?php echo $facture['police_assurance']; ?></td>
                                                    <td><?php echo $facture['id_assureur']; ?></td>
                                                    <td><?php echo $facture['id_vehicule']; ?></td>
                                                    
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="pagination">
                                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                            <a href="<?php echo site_url('factureCtrl/index/' . $i); ?>" class="<?php echo ($i == $current_page) ? 'active' : ''; ?>"><?php echo $i; ?></a>
                                        <?php endfor; ?>
                                
                            </div>
                        </div>
                        
                <!-- content-wrapper ends -->
                
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->


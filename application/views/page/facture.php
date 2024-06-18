            <!-- Content -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- Table and form go here -->
                    <div class="row">
                        <div class="col-8">
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
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">INSERTION FACTURE</h4>
                                    <form method="post" action="<?php echo site_url('factureCtrl/ajouter'); ?>">
                                        <div class="form-group">
                                            <label for="date_debut">Date de début:</label>
                                            <input type="date" id="date_debut" name="date_debut" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="date_fin">Date de fin:</label>
                                            <input type="date" id="date_fin" name="date_fin" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="police_assurance">Police d'assurance:</label>
                                            <input type="text" id="police_assurance" name="police_assurance" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="id_assureur">ID de l'assureur:</label>
                                            <input type="number" id="id_assureur" name="id_assureur" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="id_vehicule">ID du véhicule:</label>
                                            <input type="number" id="id_vehicule" name="id_vehicule" class="form-control" required>
                                        </div>
                                        <input type="hidden" name="action" value="ajouter">
                                        <button type="submit" class="btn btn-primary">Ajouter</button>
                                    </form>
                                </div>
                                
                                        



                            </div>
                        
                            </div>
                <!-- content-wrapper ends -->
                
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->


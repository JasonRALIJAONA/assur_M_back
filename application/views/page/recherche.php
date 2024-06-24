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
                                    <label for="date1" class="form-label">Entre Date :</label>
                                    <input type="date" id="date1" name="date1" class="form-control" value="<?php echo isset($_POST['date1']) ? $_POST['date1'] : ''; ?>">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="date2" class="form-label"> et Date  :</label>
                                    <input type="date" id="date2" name="date2" class="form-control" value="<?php echo isset($_POST['date2']) ? $_POST['date2'] : ''; ?>">
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
                                        <th>Utilisateur</th>
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
                                        <td><?php echo $result['utilisateur_nom']; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php else: ?>
                                    <tr>
                                        <td colspan="6">Aucun résultat trouvé.</td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="pagination">
                                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                    <a href="<?php echo site_url('rechercheCtrl/index/' . $i); ?>" class="<?php echo ($i == $current_page) ? 'active' : ''; ?>"><?php echo $i; ?></a>
                                <?php endfor; ?>
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

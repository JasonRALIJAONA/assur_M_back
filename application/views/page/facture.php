<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Factures</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
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
                            <h4 class="card-title">Liste des Factures</h4>
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
                                            <th>Actions</th>
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
                                            <td>
                                                <form action="#" method="post" style="display:inline;" onsubmit="showEditForm('<?php echo $facture['id']; ?>', '<?php echo $facture['date_debut']; ?>', '<?php echo $facture['date_fin']; ?>', '<?php echo $facture['police_assurance']; ?>', '<?php echo $facture['id_assureur']; ?>', '<?php echo $facture['id_vehicule']; ?>'); return false;">
                                                    <input type="submit" value="Modifier" class="btn btn-primary btn-sm">
                                                </form>
                                                <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette facture ?');">Supprimer</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div id="editFormContainer" class="form-container hidden">
                                <h2>Modifier Facture</h2>
                                <form action="<?php echo site_url('factureCtrl/modif'); ?>" method="post">
                                    <input type="hidden" id="editFormId" name="id">
                                    <input type="hidden" name="action" value="enregistrer">
                                    
                                    <div class="form-group">
                                        <label for="editFormDateDebut">Date Début:</label>
                                        <input type="date" id="editFormDateDebut" name="date_debut" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="editFormDateFin">Date Fin:</label>
                                        <input type="date" id="editFormDateFin" name="date_fin" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="editFormPoliceAssurance">Police d'assurance:</label>
                                        <input type="text" id="editFormPoliceAssurance" name="police_assurance" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="editFormIdAssureur">ID de l'assureur:</label>
                                        <input type="text" id="editFormIdAssureur" name="id_assureur" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="editFormIdVehicule">ID du véhicule:</label>
                                        <input type="text" id="editFormIdVehicule" name="id_vehicule" class="form-control">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-success">Enregistrer</button>
                                    <button type="button" class="btn btn-secondary" onclick="hideEditForm()">Annuler</button>
                                </form>
                            </div>
                            <div class="pagination">
                                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                    <a href="<?php echo site_url('factureCtrl/index/' . $i); ?>" class="<?php echo ($i == $current_page) ? 'active' : ''; ?>"><?php echo $i; ?></a>
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


    
    <script>
    function showEditForm(id, date_debut, date_fin, police_assurance, id_assureur, id_vehicule) {
        document.getElementById('editFormId').value = id;
        document.getElementById('editFormDateDebut').value = date_debut;
        document.getElementById('editFormDateFin').value = date_fin;
        document.getElementById('editFormPoliceAssurance').value = police_assurance;
        document.getElementById('editFormIdAssureur').value = id_assureur;
        document.getElementById('editFormIdVehicule').value = id_vehicule;
        document.getElementById('editFormContainer').classList.remove('hidden');
    }

    function hideEditForm() {
        document.getElementById('editFormContainer').classList.add('hidden');
    }
    </script>
</body>
</html>

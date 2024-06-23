<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Véhicules</title>
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
                            <h4 class="card-title">Liste des Vehicules</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <!-- <th>ID</th> -->
                                            <th>Immatriculation</th>
                                            <th>Puissance</th>
                                            <th>Marque</th>
                                            <th>Places</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($vehicules as $vehicule): ?>
                                        <tr>
                                            <!-- <td><?php echo $vehicule['id']; ?></td> -->
                                            <td><?php echo $vehicule['immatriculation']; ?></td>
                                            <td><?php echo $vehicule['puissance']; ?> cv</td>
                                            <td><?php echo $vehicule['marque']; ?></td>
                                            <td><?php echo $vehicule['place']; ?></td>
                                            <td>
                                                <form action="#" method="post" style="display:inline;" onsubmit="showEditForm('<?php echo $vehicule['id']; ?>', '<?php echo $vehicule['immatriculation']; ?>', '<?php echo $vehicule['puissance']; ?>', '<?php echo $vehicule['marque']; ?>', '<?php echo $vehicule['place']; ?>'); return false;">
                                                    <input type="submit" value="Modifier" class="btn btn-primary btn-sm">
                                                </form>
                                                <a href="<?php echo site_url('vehiculeCtrl/supprimer/'.$vehicule['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce véhicule ?');">Supprimer</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div id="editFormContainer" class="form-container hidden">
                                <h2>Modifier Véhicule</h2>
                                <form action="<?php echo site_url('vehiculeCtrl/modif'); ?>" method="post">
                                    <input type="hidden" id="editFormId" name="id">
                                    <input type="hidden" name="action" value="enregistrer">
                                    
                                    <div class="form-group">
                                        <label for="editFormImmatriculation">Immatriculation:</label>
                                        <input type="text" id="editFormImmatriculation" name="immatriculation" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="editFormPuissance">Puissance:</label>
                                        <input type="text" id="editFormPuissance" name="puissance" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="editFormMarque">Marque:</label>
                                        <input type="text" id="editFormMarque" name="marque" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="editFormPlace">Places:</label>
                                        <input type="text" id="editFormPlace" name="place" class="form-control">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-success">Enregistrer</button>
                                    <button type="button" class="btn btn-secondary" onclick="hideEditForm()">Annuler</button>
                                </form>
                            </div>
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

    <script>
    function showEditForm(id, immatriculation, puissance, marque, place) {
        document.getElementById('editFormId').value = id;
        document.getElementById('editFormImmatriculation').value = immatriculation;
        document.getElementById('editFormPuissance').value = puissance;
        document.getElementById('editFormMarque').value = marque;
        document.getElementById('editFormPlace').value = place;
        document.getElementById('editFormContainer').classList.remove('hidden');
    }

    function hideEditForm() {
        document.getElementById('editFormContainer').classList.add('hidden');
    }
    </script>
</body>
</html>

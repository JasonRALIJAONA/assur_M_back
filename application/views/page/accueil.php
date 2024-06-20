<div class="main-panel">
            <div class="content-wrapper">
                <!-- Table and form go here -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Liste des Administrateurs</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <!-- <th>ID</th> -->
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Adresse</th>
                                                <th>Naissance</th>
                                                <th>Telephone</th>
                                                <th>Solde</th>
                                                <th>Email</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($utilisateurs as $utilisateur): ?>
                                            <tr>
                                                <!-- <td><?php echo $utilisateur['id']; ?></td> -->
                                                <td><?php echo $utilisateur['nom']; ?></td>
                                                <td><?php echo $utilisateur['prenom']; ?></td>
                                                <td><?php echo $utilisateur['adresse']; ?></td>
                                                <td><?php echo $utilisateur['naissance']; ?></td>
                                                <td><?php echo $utilisateur['telephone']; ?></td>
                                                <td><?php echo $utilisateur['solde']; ?></td>
                                                <td><?php echo $utilisateur['email']; ?></td>
                                                <td>
                                                    <form action="#" method="post" style="display:inline;" onsubmit="showEditForm(<?php echo $utilisateur['id']; ?>, '<?php echo $utilisateur['email']; ?>'); return false;">
                                                        <input type="submit" value="Modifier" class="btn btn-primary btn-sm">
                                                    </form>
                                                    <a href="<?php echo site_url('login/supprimer/'.$utilisateur['id']); ?>" class="btn btn-danger btn-sm">Supprimer</a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="editFormContainer" class="form-container hidden">
                                    <h2>Modifier Mail Utilisateur</h2>
                                    <form action="<?php echo site_url('login/accueil'); ?>" method="post" >
                                        <input type="hidden" id="editFormId" name="id">
                                        <input type="hidden" name="action" value="enregistrer">
                                        
                                        <div class="form-group">
                                            <label for="editFormEmail">Email:</label>
                                            <input type="text" id="editFormEmail" name="email" class="form-control">
                                        </div>
                                        
                                         
                                        <button type="submit" class="btn btn-success">Enregistrer</button>
                                        <button type="button" class="btn btn-secondary" onclick="hideEditForm()">Annuler</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

<script>
    function showEditForm(id, email, nom, prenom, adresse, naissance, telephone) {
    document.getElementById('editFormId').value = id;
    document.getElementById('editFormEmail').value = email;
    document.getElementById('editFormContainer').classList.remove('hidden');
}

    function hideEditForm() {
        document.getElementById('editFormContainer').classList.add('hidden');
    }
</script>
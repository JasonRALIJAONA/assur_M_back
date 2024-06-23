
            <!-- partial -->
 
            <!-- partial -->
            <!-- Content -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- Table and form go here -->
                    <div class="row">
                        <div class="col-9">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Les Assurances</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <!-- <th>ID</th> -->
                                                    <th>Nom</th>
                                                    <th>Comission</th>
                                                    <th>Numero Telma</th>
                                                    <th>Numero Orange</th>
                                                    <th>Numero Airtel</th>
                                                    <th></th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($assureurs as $assureur): ?>
                                                <tr>
                                                    <!-- <td><?php echo $assureur['id']; ?></td> -->
                                                    <td><?php echo $assureur['nom']; ?></td>
                                                    <td><?php echo $assureur['commission']; ?></td>
                                                    <td><?php echo $assureur['num_telma']; ?></td>
                                                    <td><?php echo $assureur['num_orange']; ?></td>
                                                    <td><?php echo $assureur['num_airtel']; ?></td>
                                                    <td>
                                                        <button onclick="showEditForm('<?php echo $assureur['id']; ?>', '<?php echo $assureur['nom']; ?>', '<?php echo $assureur['commission']; ?>', '<?php echo $assureur['num_telma']; ?>', '<?php echo $assureur['num_orange']; ?>', '<?php echo $assureur['num_airtel']; ?>')" class="btn btn-primary btn-sm">Modifier</button>
                                                        <!-- <a href="<?php echo site_url('assureurCtrl/supprimer/'.$assureur['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet assureur ?');">Supprimer</a> -->
                                                    </td>
                                                    
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div id="editFormContainer" class="form-container hidden">
                                <h2>Modifier Assureur</h2>
                                <form action="<?php echo site_url('assureurCtrl/modif'); ?>" method="post">
                                    <input type="hidden" id="editFormId" name="id">
                                    <input type="hidden" name="action" value="enregistrer">
                                    
                                    <div class="form-group">
                                        <label for="editFormNom">Nom:</label>
                                        <input type="text" id="editFormNom" name="nom" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="editFormCommission">Commission:</label>
                                        <input type="text" id="editFormCommission" name="commission" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="editFormNumTelma">Numero Telma:</label>
                                        <input type="text" id="editFormNumTelma" name="num_telma" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="editFormNumOrange">Numero Orange:</label>
                                        <input type="text" id="editFormNumOrange" name="num_orange" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="editFormNumAirtel">Numero Airtel:</label>
                                        <input type="text" id="editFormNumAirtel" name="num_airtel" class="form-control">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-success">Enregistrer</button>
                                    <button type="button" class="btn btn-secondary" onclick="hideEditForm()">Annuler</button>
                                </form>
                            </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>

                    <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Nos Partenaires en Images</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <a href="#">
                                                    <img src="<?php echo site_url('assets/images/images.png');?>" alt="Image 1" width="150" height="150">
                                                </a>
                                            </th>
                                            <th>
                                                <a href="#">
                                                    <img src="<?php echo site_url('assets/images/images (1).png');?>" alt="Image 2" width="150" height="150">
                                                </a>
                                            </th>
                                            <th>
                                                <a href="#">
                                                    <img src="<?php echo site_url('assets/images/images (2).png');?>" alt="Image 3" width="150" height="150">
                                                </a>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- Footer -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright over here</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
</body>
</html>


<script>
    function showEditForm(id, nom, commission, num_telma, num_orange, num_airtel) {
        document.getElementById('editFormId').value = id;
        document.getElementById('editFormNom').value = nom;
        document.getElementById('editFormCommission').value = commission;
        document.getElementById('editFormNumTelma').value = num_telma;
        document.getElementById('editFormNumOrange').value = num_orange;
        document.getElementById('editFormNumAirtel').value = num_airtel;
        document.getElementById('editFormContainer').classList.remove('hidden');
    }

    function hideEditForm() {
        document.getElementById('editFormContainer').classList.add('hidden');
    }
    </script>
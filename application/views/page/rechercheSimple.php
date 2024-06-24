<!-- Content -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recherche</h4>
                        <form method="post" action="<?php echo site_url('userCtrl/index'); ?>">
                            <div class="form-group">
                                <label for="criteria">Critère de Recherche</label>
                                <input type="text" class="form-control" id="criteria" name="criteria" placeholder="Entrez le critère de recherche">
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
                                        <!-- <th>ID</th> -->
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Naissance</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($results)): ?>
                                    <?php foreach ($results as $result): ?>
                                    <tr>
                                         <!-- <td><?php echo $result['id']; ?></td> -->
                                        <td><?php echo $result['nom']; ?></td>
                                        <td><?php echo $result['prenom']; ?></td>
                                        <td><?php echo $result['naissance']; ?></td>
                                        <td><?php echo $result['email']; ?></td>
                                        <td><?php echo $result['telephone']; ?></td>
                                        
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php else: ?>
                                    <tr>
                                        <td colspan="5">Aucun résultat trouvé.</td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="pagination">
                                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                    <a href="<?php echo site_url('userCtrl/index/' . $i); ?>" class="<?php echo ($i == $current_page) ? 'active' : ''; ?>"><?php echo $i; ?></a>
                                <?php endfor; ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


            <!-- Content -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- Table and form go here -->
                    <div class="row">
    <div class="col-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nos Operateurs</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <!-- <th>Actions</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($operateurs as $operateur): ?>
                            <tr>
                                <td><?php echo $operateur['id']; ?></td>
                                <td><?php echo $operateur['nom']; ?></td>
                                <!-- <td>
                                    <form action="#" method="post" style="display:inline;" >
                                        <input type="submit" value="Modifier" class="btn btn-primary btn-sm">
                                    </form>
                                    <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                                </td> -->
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-7">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nos Partenaires en Images</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <a href="#">
                                        <img src="<?php echo site_url('assets/images/le-backbone-de-telma-a-passe-le-cap-d-antsiranana_322_222.jpg');?>" alt="Image 1" width="130" height="130" style="object-fit: fill;">
                                    </a>
                                </th>
                                <th>
                                    <a href="#">
                                        <img src="<?php echo site_url('assets/images/airtel-logo-white-text-vertical.jpg');?>" alt="Image 2" width="130" height="130">
                                    </a>
                                </th>
                                <th>
                                    <a href="#">
                                        <img src="<?php echo site_url('assets/images/Orange_logo.svg.png');?>" alt="Image 3" width="130" height="130">
                                    </a>
                                </th>
                            </tr>
                        </thead>
                    </table>
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

    
</body>
</html>

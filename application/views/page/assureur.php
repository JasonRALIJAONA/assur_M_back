
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
                                                    
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
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

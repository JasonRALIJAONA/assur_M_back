<div class="main-panel bordered">
 <div class="content-wrapper">
    <div class="container bordered">
        <div class="row">
            <div class="col-md-12 bordered-box">
                <h2 class="text-center my-4">Frequence de Payement d'Assurance</h2>
                <div class="row mb-4">
                    <div class="col-md-2">
                        <label for="yearSelect">Année:</label>
                        <select id="yearSelect" class="form-control">
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="monthSelect">Mois:</label>
                        <select id="monthSelect" class="form-control">
                            <option value="1">Janvier</option>
                            <option value="2">Fevrier</option>
                            <option value="3">Mars</option>
                            <option value="4">Avril</option>
                            <option value="5">Mai</option>
                            <option value="6">Juin</option>
                            <option value="7">Juillet</option>
                            <option value="8">Aout</option>
                            <option value="9">Septembre</option>
                            <option value="10">Octobre</option>
                            <option value="11">Novembre</option>
                            <option value="12">Decembre</option>
                        </select>        
                    </div>                                  
                </div>
                <button id="viewStats" class="btn btn-primary mb-4">Voir</button>            
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-center" id="">Nombre Total des Utilisateurs qui paye l'Assurance: </p>
                        <canvas id="barChart"></canvas>
                        <p class="text-center" id="totalUtilisateurs">Nombre d'utilisateur pendant cette periode: </p>
                    </div>
                    <div class="col-md-6">
                        <canvas id="detailChart"></canvas>     
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
            </div>
            <!-- Main-panel ends -->
        </div>
        <!-- Page-body-wrapper ends -->
    </div>
    <!-- Plugins: JS -->


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- End custom JS for this page -->

    <script>
    $(document).ready(function () {
        var barChart, assuranceChart;

        $('#viewStats').click(function () {
            var selectedYear = $('#yearSelect').val();
            var selectedMonth = $('#monthSelect').val();

            $.ajax({
                url: '<?php echo base_url('FrequenceCtrl/get_stats') ?>',
                type: 'POST',
                data: {
                    mois: selectedMonth,
                    annee: selectedYear
                },
                success: function (response) {
                    var labels = response.map(item => item.frequence);
                    var data = response.map(item => Number(item.nombre_utilisateurs));

                    // Calcul de la somme
                    var totalUtilisateurs = data.reduce((acc, val) => acc + val, 0);
                    console.log('Total des utilisateurs:', totalUtilisateurs);
                    $('#totalUtilisateurs').text("Nombre d' utilisateur pendant cette periode: " + totalUtilisateurs);

                    var barChartData = {
                        labels: labels,
                        datasets: [{
                            label: 'Users',
                            data: data,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    };

                    var barChartOptions = {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                        onClick: function (e, elements) {
                            if (elements.length > 0) {
                                var index = elements[0].index;
                                var frequence = labels[index];
                                console.log(index);
                                fetchFrequenceData(selectedYear, selectedMonth, frequence);
                            }
                        }
                    };

                    var barCtx = document.getElementById('barChart').getContext('2d');
                    if (barChart) {
                        barChart.destroy();
                    }
                    barChart = new Chart(barCtx, {
                        type: 'bar',
                        data: barChartData,
                        options: barChartOptions
                    });
                },
                error: function () {
                    alert('Erreur lors de la récupération des données.');
                }
            });
        });

        function fetchFrequenceData(annee, mois, frequence) {
            $.ajax({
                url: '<?php echo base_url('FrequenceCtrl/get_stats_by_frequence') ?>',
                type: 'POST',
                data: {
                    annee: annee,
                    mois: mois,
                    frequence: frequence
                },
                success: function (response) {
                    console.log(response);
                    var assuranceLabels = response.map(item => 'assurance ' + item.nom);
                    var assuranceData = response.map(item => item.nombre_utilisateurs);

                    var assuranceChartData = {
                        labels: assuranceLabels,
                        datasets: [{
                            label: 'Users',
                            data: assuranceData,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    };

                    var assuranceChartOptions = {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    };

                    var assuranceCtx = document.getElementById('detailChart').getContext('2d');
                    if (assuranceChart) {
                        assuranceChart.destroy();
                    }
                    assuranceChart = new Chart(assuranceCtx, {
                        type: 'bar',
                        data: assuranceChartData,
                        options: assuranceChartOptions
                    });
                },
                error: function () {
                    alert('Erreur lors de la récupération des données pour la semaine.');
                }
            });
        }
    });
</script>
</body>
</html>


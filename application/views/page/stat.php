<div class="main-panel bordered">
    <div class="content-wrapper">
        <div class="container bordered">
            <div class="row">
                <div class="col-md-12 bordered-box">
                    <h2 class="text-center my-4">Statistique pour assur'M</h2>
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
                                <option value="2">Février</option>
                                <option value="3">Mars</option>
                                <option value="4">Avril</option>
                                <option value="5">Mai</option>
                                <option value="6">Juin</option>
                                <option value="7">Juillet</option>
                                <option value="8">Août</option>
                                <option value="9">Septembre</option>
                                <option value="10">Octobre</option>
                                <option value="11">Novembre</option>
                                <option value="12">Décembre</option>
                            </select>        
                        </div>
                    </div>
                    <button id="viewStats" class="btn btn-primary mb-4">Voir</button>            
                    <div class="row">
                        <div class="col-md-6">
                            <canvas id="barChart"></canvas>
                            <p class="text-center" id="totalUtilisateurs">Nombre d'utilisateurs pendant cette période : </p>
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {
    var barChart, detailChart;
    var assuranceIds = []; // Array pour stocker les IDs des assurances correspondant aux labels
    var currentAssuranceId = null; // Pour suivre l'ID de l'assurance actuellement affichée

    // Fonction pour initialiser le graphique principal
    function initBarChart(labels, utilisateursData) {
        var barCtx = document.getElementById('barChart').getContext('2d');
        barChart = new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Nombre d\'utilisateurs',
                    data: utilisateursData,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                onClick: function (e, elements) {
                    if (elements.length > 0) {
                        var assuranceIndex = elements[0].index;
                        var assuranceId = assuranceIds[assuranceIndex]; // Récupérez l'ID de l'assurance
                        fetchAssuranceData(assuranceId);
                    }
                }
            }
        });
    }

    // Fonction pour initialiser le graphique de détail
    function initDetailChart(labels, utilisateursAssuranceData) {
        var detailCtx = document.getElementById('detailChart').getContext('2d');
        detailChart = new Chart(detailCtx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Nombre d\'utilisateurs pour cette assurance',
                    data: utilisateursAssuranceData,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    // Fonction pour nettoyer le graphique de détail
    function clearDetailChart() {
        if (detailChart) {
            detailChart.destroy();
            detailChart = null;
        }
    }

    // Fonction pour mettre à jour les données du graphique principal
    function updateBarChart(labels, utilisateursData) {
        barChart.data.labels = labels;
        barChart.data.datasets[0].data = utilisateursData;
        barChart.update();
    }

    // Fonction pour récupérer les données par mois et année sélectionnés
    $('#viewStats').click(function () {
        var selectedYear = $('#yearSelect').val();
        var selectedMonth = $('#monthSelect').val();

        $.ajax({
            url: '<?php echo base_url('StatistiqueCtrl/get_nb_utilisateurs_assurances') ?>',
            type: 'POST',
            data: {
                mois: selectedMonth,
                annee: selectedYear
            },
            success: function (data) {
                var labels = data.map(item => item.nom_assureur);
                var utilisateursData = data.map(item => item.nombre_utilisateurs);
                assuranceIds = data.map(item => item.id_assureur); // Stockez les IDs des assurances

                // Calcul de la somme totale des utilisateurs
                var totalUtilisateurs = data.reduce((acc, item) =>  item.total_utilisateurs, 0);
                $('#totalUtilisateurs').text("Nombre d'utilisateurs pendant cette période : " + totalUtilisateurs); // Affichage sans conversion en nombre

                // Si le graphique principal existe, le détruire avant de le recréer
                if (barChart) {
                    barChart.destroy();
                }

                // Initialiser le nouveau graphique principal
                initBarChart(labels, utilisateursData);

                // Nettoyer le graphique de détail s'il existe
                clearDetailChart();

                // Réinitialiser l'ID de l'assurance sélectionnée
                currentAssuranceId = null;
            },
            error: function () {
                alert('Erreur lors de la récupération des données.');
            }
        });
    });

    // Fonction pour récupérer les données spécifiques à une assurance
    function fetchAssuranceData(assuranceId) {
        var selectedYear = $('#yearSelect').val();
        var selectedMonth = $('#monthSelect').val();

        $.ajax({
            url: '<?php echo base_url('StatistiqueCtrl/get_nb_utilisateurs_assurance_specifique') ?>',
            type: 'POST',
            data: {
                mois: selectedMonth,
                annee: selectedYear,
                assurance: assuranceId
            },
            success: function (data) {
                var assuranceLabels = data.map(item => item.semaine_debut); // Utiliser les semaines comme labels
                var utilisateursAssuranceData = data.map(item => item.nombre_utilisateurs);

                // Si le graphique de détail existe, le détruire avant de le recréer
                clearDetailChart();

                // Initialiser le nouveau graphique de détail
                initDetailChart(assuranceLabels, utilisateursAssuranceData);

                // Mettre à jour l'ID de l'assurance actuellement affichée
                currentAssuranceId = assuranceId;
            },
            error: function () {
                alert('Erreur lors de la récupération des données pour cette assurance.');
            }
        });
    }

    // Lorsque l'utilisateur change la sélection d'année ou de mois, nettoyer le graphique de détail
    $('#yearSelect, #monthSelect').change(function () {
        clearDetailChart();
        currentAssuranceId = null;
    });
});


</script>

</body>
</html>
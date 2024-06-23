<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chiffre d'affaire pour assurance</title>
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>

    <style>
        /* Styles spécifiques à la page */
        .container {
            margin-top: 50px;
        }
        #daily-chiffre-affaire {
            font-size: 14px;
        }
    </style>

</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Chiffre d'affaire pour notre Assur'M</h2>
        <div class="row">
            <div class="col-md-3">
                <label for="year">Année:</label>
                <select id="year" class="form-control">
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="month">Mois:</label>
                <select id="month" class="form-control">
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
            <div class="col-md-3 align-self-end">
                <button id="get-chiffre-affaire" class="btn btn-primary btn-block mt-2">Voir le chiffre d'affaire</button>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        Données mensuelles
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Mois</th>
                                    <th scope="col">Chiffre d'affaire</th>
                                </tr>
                            </thead>
                            <tbody id="daily-chiffre-affaire">
                                <!-- Les données seront insérées dynamiquement ici -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        Graphique du chiffre d'affaire
                    </div>
                    <div class="card-body">
                        <canvas id="chiffre-affaire-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#get-chiffre-affaire').click(function() {
                var year = $('#year').val();
                var month = $('#month').val();

                $.ajax({
                    url: '<?= site_url("ChiffredAffaireCtrl/get_daily_chiffre_affaire") ?>',
                    type: 'POST',
                    data: { year: year, month: month },
                    success: function(response) {
                        try {
                            console.log("Response from server: ", response); // Log the entire response
                            var data = JSON.parse(response);
                            console.log("Parsed data: ", data); // Log the parsed data
                            var dailyChiffreAffaire = data.daily_chiffre_affaire;

                            if (!dailyChiffreAffaire) {
                                throw new Error("Invalid data structure: daily_chiffre_affaire is undefined");
                            }

                            var months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
                            var values = [];

                            // Initialize array for each month with 0
                            var monthlyValues = Array.from({ length: 12 }, () => 0);

                            dailyChiffreAffaire.forEach(function(item) {
                                var monthIndex = parseInt(item.date_payement.split('-')[1]) - 1; // Month index (0-based)
                                var chiffreAffaireValue = parseFloat(item.chiffre_affaire);

                                if (!isNaN(chiffreAffaireValue)) {
                                    monthlyValues[monthIndex] += chiffreAffaireValue;
                                }
                            });

                            var tableBody = '';
                            for (var i = 0; i < months.length; i++) {
                                tableBody += `<tr><td>${months[i]}</td><td>${monthlyValues[i].toFixed(2)}</td></tr>`;
                                values.push(monthlyValues[i].toFixed(2));
                            }
                            $('#daily-chiffre-affaire').html(tableBody);

                            var ctx = $('#chiffre-affaire-chart');
                            new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: months,
                                    datasets: [{
                                        label: 'Chiffre d\'affaire',
                                        data: values,
                                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                        borderColor: 'rgba(75, 192, 192, 1)',
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                        } catch (e) {
                            console.error("Parsing error:", e);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX error:", error);
                    }
                });
            });
        });
    </script>



</body>
</html>

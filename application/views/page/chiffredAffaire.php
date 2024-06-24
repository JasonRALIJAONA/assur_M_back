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
                <label for="year">Debut:</label>
                <input type="date" name="debut" id="debut">
                
            </div>
            <div class="col-md-3">
                <label for="year">Fin:</label>
                <input type="date" name="fin" id="fin">
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
                        <thead id="bottom-thead">
                            <tr>
                                <th>Chiffre d'affaire</th>
                                <th>Nombre d'utilisateurs</th>
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
        var debut = $('#debut').val();
        var fin = $('#fin').val();

        $.ajax({
            url: '<?= site_url("ChiffredAffaireCtrl/get_chiffre_affaire") ?>',
            type: 'POST',
            data: { debut: debut, fin: fin },
            success: function(response) {
                try {
                    var data = JSON.parse(response);
                    console.log(data.details);

                    var tableBody = '';
                    for (var i = 0; i < data.chiffre_affaire.length; i++) {
                        tableBody += `<tr><td>${data.chiffre_affaire[i].chiffre_affaire}</td><td>${data.chiffre_affaire[i].nombre_utilisateurs}</td></tr>`;
                    }
                    $('#daily-chiffre-affaire').html(tableBody);

                    var values = [];
                    var labels = [];
                    for (var i = 0; i < data.details.length; i++) {
                        values.push(data.details[i].chiffre_affaire);
                        labels.push(data.details[i].date_payement);
                    }

                    var ctx = document.getElementById('chiffre-affaire-chart').getContext('2d');
                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: labels,
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


<div class="main-panel bordered">
 <div class="content-wrapper">
    <div class="container">
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
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>        
                    </div>                                  
                </div>
                <button id="viewStats" class="btn btn-primary mb-4">Voir</button>            
                <div class="row">
                    <div class="col-md-6">
                        <canvas id="barChart"></canvas>
                        <p class="text-center">Nombre d'utilisateur pendant cette periode:</p>
                    </div>
                    <div class="col-md-6">
                        <canvas id="lineChart"></canvas>     
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

    <!-- End custom JS for this page -->

    <script>
    $(document).ready(function () {
        $('#viewStats').click(function () {
            var selectedYear = $('#yearSelect').val();
            var selectedMonth = $('#monthSelect').val();

            var barChartData = {
                labels: ['Mama', 'Ny havana', 'Aro'],
                datasets: [{
                    label: 'Users',
                    data: [85, 115, 140],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            };

            var lineChartData = {
                labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                datasets: [{
                    label: 'Users',
                    data: [50, 75, 150, 100], // Corrected data array
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1,
                    fill: false
                }]
            };

            var barChartOptions = {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            };

            var lineChartOptions = {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            };

            var barCtx = document.getElementById('barChart').getContext('2d');
            var lineCtx = document.getElementById('lineChart').getContext('2d');

            new Chart(barCtx, {
                type: 'bar',
                data: barChartData,
                options: barChartOptions
            });

            new Chart(lineCtx, {
                type: 'line',
                data: lineChartData,
                options: lineChartOptions
            });
        });
    });

    </script>
</body>
</html>

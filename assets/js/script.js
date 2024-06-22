// $(document).ready(function () {
//     $('#viewStats').click(function () {
//         var selectedYear = $('#yearSelect').val();
//         var selectedMonth = $('#monthSelect').val();

//         // Your logic to fetch data based on selected year and month
//         // This is just an example. Replace it with your actual data fetching logic.

//         var barChartData = {
//             labels: ['Mama', 'Ny havana', 'Aro'],
//             datasets: [{
//                 label: 'Users',
//                 data: [85, 115, 140], // Ensure the array length matches the labels
//                 backgroundColor: [
//                     'rgba(54, 162, 235, 0.2)',
//                     'rgba(54, 162, 235, 0.2)',
//                     'rgba(54, 162, 235, 0.2)'
//                 ],
//                 borderColor: [
//                     'rgba(54, 162, 235, 1)',
//                     'rgba(54, 162, 235, 1)',
//                     'rgba(54, 162, 235, 1)'
//                 ],
//                 borderWidth: 1
//             }]
//         };

//         var lineChartData = {
//             labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
//             datasets: [{
//                 label: 'Users',
//                 data: [50, 75, 150, 100], // Corrected data array
//                 backgroundColor: 'rgba(255, 99, 132, 0.2)',
//                 borderColor: 'rgba(255, 99, 132, 1)',
//                 borderWidth: 1,
//                 fill: false
//             }]
//         };

//         var barChartOptions = {
//             scales: {
//                 y: {
//                     beginAtZero: true
//                 }
//             }
//         };

//         var lineChartOptions = {
//             scales: {
//                 y: {
//                     beginAtZero: true
//                 }
//             }
//         };

//         var barCtx = document.getElementById('barChart').getContext('2d');
//         var lineCtx = document.getElementById('lineChart').getContext('2d');

//         new Chart(barCtx, {
//             type: 'bar',
//             data: barChartData,
//             options: barChartOptions
//         });

//         new Chart(lineCtx, {
//             type: 'line',
//             data: lineChartData,
//             options: lineChartOptions
//         });
//     });
// });

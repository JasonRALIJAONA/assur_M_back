document.addEventListener('DOMContentLoaded', function() {
    function loadCanvas(){
        const myChart = new Chart(ctx, {
            type: 'doughnut', // Type de graphique: 'doughnut' pour un cercle statistique
            data: {
                labels: ['Rouge', 'Bleu', 'Jaune'], // Étiquettes pour chaque segment
                datasets: [{
                    label: 'Pourcentage',
                    data: [40,30,20], // Données pour chaque segment
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Cercle Statistique'
                    }
                }
            }
        });
        console.log('Canvas loaded');

    }
    // Fonction pour charger une page
    function loadPage(page) {
        fetch(`${page}.html`)
            .then(response => response.text())
            .then(html => {
                document.getElementById('content').innerHTML = html;
                loadCanvas();
            })
            .catch(error => {
                console.error('Erreur de chargement:', error);
                document.getElementById('content').innerHTML = '<p>Erreur de chargement du contenu.</p>';
            });
    }

    // Ajouter des écouteurs d'événements aux liens
    document.querySelectorAll('nav a').forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const page = this.getAttribute('data-page');
            loadPage(page);
        });
    });

    // Charger la page d'accueil par défaut
    loadPage('pages/crud_utilisateur');
  // Sélectionnez l'élément canvas
    const ctx = document.getElementById('myChart').getContext('2d');
/////////////////////////////////////////////////////////////////////////////////
    // Créez le graphique
});

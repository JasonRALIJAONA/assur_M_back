<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-06-25 00:09:24 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 00:09:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 00:24:04 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  syntaxe en entrée invalide pour le type date : «  »
LINE 7:         WHERE p.date_payement BETWEEN '' AND ''
                                              ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-25 00:24:04 --> Query error: ERREUR:  syntaxe en entrée invalide pour le type date : «  »
LINE 7:         WHERE p.date_payement BETWEEN '' AND ''
                                              ^ - Invalid query: SELECT
        SUM(p.valeur*a.commission/100) AS chiffre_affaire,
        COUNT(v.id_utilisateur) AS nombre_utilisateurs
        FROM payement p
        JOIN vehicule v ON p.id_vehicule = v.id
        JOIN assureur a ON v.id_assureur = a.id
        WHERE p.date_payement BETWEEN '' AND ''
        GROUP BY a.nom
        ORDER BY chiffre_affaire DESC
ERROR - 2024-06-25 00:28:42 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  syntaxe en entrée invalide pour le type date : «  »
LINE 7:         WHERE p.date_payement BETWEEN '' AND ''
                                              ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-25 00:28:42 --> Query error: ERREUR:  syntaxe en entrée invalide pour le type date : «  »
LINE 7:         WHERE p.date_payement BETWEEN '' AND ''
                                              ^ - Invalid query: SELECT
        SUM(p.valeur*a.commission/100) AS chiffre_affaire,
        COUNT(v.id_utilisateur) AS nombre_utilisateurs
        FROM payement p
        JOIN vehicule v ON p.id_vehicule = v.id
        JOIN assureur a ON v.id_assureur = a.id
        WHERE p.date_payement BETWEEN '' AND ''
        GROUP BY a.nom
        ORDER BY chiffre_affaire DESC
ERROR - 2024-06-25 00:28:48 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  syntaxe en entrée invalide pour le type date : «  »
LINE 7:         WHERE p.date_payement BETWEEN '2024-06-06' AND ''
                                                               ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-25 00:28:48 --> Query error: ERREUR:  syntaxe en entrée invalide pour le type date : «  »
LINE 7:         WHERE p.date_payement BETWEEN '2024-06-06' AND ''
                                                               ^ - Invalid query: SELECT
        SUM(p.valeur*a.commission/100) AS chiffre_affaire,
        COUNT(v.id_utilisateur) AS nombre_utilisateurs
        FROM payement p
        JOIN vehicule v ON p.id_vehicule = v.id
        JOIN assureur a ON v.id_assureur = a.id
        WHERE p.date_payement BETWEEN '2024-06-06' AND ''
        GROUP BY a.nom
        ORDER BY chiffre_affaire DESC
ERROR - 2024-06-25 00:28:49 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  syntaxe en entrée invalide pour le type date : «  »
LINE 7:         WHERE p.date_payement BETWEEN '2024-06-06' AND ''
                                                               ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-25 00:28:49 --> Query error: ERREUR:  syntaxe en entrée invalide pour le type date : «  »
LINE 7:         WHERE p.date_payement BETWEEN '2024-06-06' AND ''
                                                               ^ - Invalid query: SELECT
        SUM(p.valeur*a.commission/100) AS chiffre_affaire,
        COUNT(v.id_utilisateur) AS nombre_utilisateurs
        FROM payement p
        JOIN vehicule v ON p.id_vehicule = v.id
        JOIN assureur a ON v.id_assureur = a.id
        WHERE p.date_payement BETWEEN '2024-06-06' AND ''
        GROUP BY a.nom
        ORDER BY chiffre_affaire DESC

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
ERROR - 2024-06-25 06:56:48 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 06:56:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 09:10:16 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 09:10:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 09:18:06 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 09:18:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 18:14:18 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 18:14:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 18:59:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  la base de donn�es � assur_m � n'existe pas C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 154
ERROR - 2024-06-25 18:59:33 --> Unable to connect to the database
ERROR - 2024-06-25 18:59:34 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  la base de donn�es � assur_m � n'existe pas C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 154
ERROR - 2024-06-25 18:59:34 --> Unable to connect to the database
ERROR - 2024-06-25 18:59:55 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la relation « assureur » n'existe pas
LINE 2: FROM &quot;assureur&quot;
             ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-25 18:59:55 --> Query error: ERREUR:  la relation « assureur » n'existe pas
LINE 2: FROM "assureur"
             ^ - Invalid query: SELECT *
FROM "assureur"
ERROR - 2024-06-25 18:59:56 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la relation « assureur » n'existe pas
LINE 2: FROM &quot;assureur&quot;
             ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-25 18:59:56 --> Query error: ERREUR:  la relation « assureur » n'existe pas
LINE 2: FROM "assureur"
             ^ - Invalid query: SELECT *
FROM "assureur"
ERROR - 2024-06-25 18:59:56 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la relation « assureur » n'existe pas
LINE 2: FROM &quot;assureur&quot;
             ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-25 18:59:56 --> Query error: ERREUR:  la relation « assureur » n'existe pas
LINE 2: FROM "assureur"
             ^ - Invalid query: SELECT *
FROM "assureur"
ERROR - 2024-06-25 19:00:03 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la relation « assureur » n'existe pas
LINE 2: FROM &quot;assureur&quot;
             ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-25 19:00:03 --> Query error: ERREUR:  la relation « assureur » n'existe pas
LINE 2: FROM "assureur"
             ^ - Invalid query: SELECT *
FROM "assureur"
ERROR - 2024-06-25 19:00:06 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 19:00:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 19:00:08 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la relation « utilisateur » n'existe pas
LINE 1: SELECT id FROM utilisateur WHERE email = 'julie.petit@exampl...
                       ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-25 19:00:08 --> Query error: ERREUR:  la relation « utilisateur » n'existe pas
LINE 1: SELECT id FROM utilisateur WHERE email = 'julie.petit@exampl...
                       ^ - Invalid query: SELECT id FROM utilisateur WHERE email = 'julie.petit@example.com' AND mdp = 'mdp505'
ERROR - 2024-06-25 19:07:05 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 19:07:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 19:07:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 19:07:06 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 19:07:06 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 19:07:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 19:21:31 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la relation « facture » n'existe pas
LINE 1: SELECT COUNT(*) AS &quot;numrows&quot; FROM &quot;facture&quot;
                                          ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-25 19:21:31 --> Query error: ERREUR:  la relation « facture » n'existe pas
LINE 1: SELECT COUNT(*) AS "numrows" FROM "facture"
                                          ^ - Invalid query: SELECT COUNT(*) AS "numrows" FROM "facture"
ERROR - 2024-06-25 20:00:51 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la relation « payement » n'existe pas
LINE 4:                 FROM payement p
                             ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-25 20:00:51 --> Query error: ERREUR:  la relation « payement » n'existe pas
LINE 4:                 FROM payement p
                             ^ - Invalid query: SELECT 
                    p.frequence, 
                    COUNT(DISTINCT p.id_utilisateur) AS nombre_utilisateurs
                FROM payement p
                WHERE EXTRACT(YEAR FROM p.date_payement) = '2023'
                AND EXTRACT(MONTH FROM p.date_payement) = '1'
                GROUP BY p.frequence
                ORDER BY p.frequence
ERROR - 2024-06-25 20:00:56 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la relation « payement » n'existe pas
LINE 4:                 FROM payement p
                             ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-25 20:00:56 --> Query error: ERREUR:  la relation « payement » n'existe pas
LINE 4:                 FROM payement p
                             ^ - Invalid query: SELECT 
                    p.frequence, 
                    COUNT(DISTINCT p.id_utilisateur) AS nombre_utilisateurs
                FROM payement p
                WHERE EXTRACT(YEAR FROM p.date_payement) = '2023'
                AND EXTRACT(MONTH FROM p.date_payement) = '5'
                GROUP BY p.frequence
                ORDER BY p.frequence
ERROR - 2024-06-25 20:01:03 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la relation « payement » n'existe pas
LINE 4:                 FROM payement p
                             ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-25 20:01:03 --> Query error: ERREUR:  la relation « payement » n'existe pas
LINE 4:                 FROM payement p
                             ^ - Invalid query: SELECT 
                    p.frequence, 
                    COUNT(DISTINCT p.id_utilisateur) AS nombre_utilisateurs
                FROM payement p
                WHERE EXTRACT(YEAR FROM p.date_payement) = '2024'
                AND EXTRACT(MONTH FROM p.date_payement) = '5'
                GROUP BY p.frequence
                ORDER BY p.frequence
ERROR - 2024-06-25 21:34:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 21:34:46 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 21:47:36 --> Severity: error --> Exception: max(): Argument #1 ($value) must be of type array, int given C:\xampp\htdocs\assur_M_back\application\views\page\facture.php 97
ERROR - 2024-06-25 21:47:37 --> Severity: error --> Exception: max(): Argument #1 ($value) must be of type array, int given C:\xampp\htdocs\assur_M_back\application\views\page\facture.php 97
ERROR - 2024-06-25 21:50:28 --> 404 Page Not Found: FactureCtrl/index1
ERROR - 2024-06-25 21:50:30 --> 404 Page Not Found: FactureCtrl/index1
ERROR - 2024-06-25 21:50:30 --> 404 Page Not Found: FactureCtrl/index1
ERROR - 2024-06-25 21:50:31 --> 404 Page Not Found: FactureCtrl/index3
ERROR - 2024-06-25 21:50:32 --> 404 Page Not Found: FactureCtrl/index2
ERROR - 2024-06-25 21:50:33 --> 404 Page Not Found: FactureCtrl/index3
ERROR - 2024-06-25 21:51:47 --> 404 Page Not Found: FactureCtrl/index1
ERROR - 2024-06-25 21:51:48 --> 404 Page Not Found: FactureCtrl/index1
ERROR - 2024-06-25 21:51:48 --> 404 Page Not Found: FactureCtrl/index1
ERROR - 2024-06-25 21:51:49 --> 404 Page Not Found: FactureCtrl/index1
ERROR - 2024-06-25 21:51:49 --> 404 Page Not Found: FactureCtrl/index1
ERROR - 2024-06-25 21:51:49 --> 404 Page Not Found: FactureCtrl/index1
ERROR - 2024-06-25 21:51:50 --> 404 Page Not Found: FactureCtrl/index1
ERROR - 2024-06-25 21:51:50 --> 404 Page Not Found: FactureCtrl/index1
ERROR - 2024-06-25 21:51:51 --> 404 Page Not Found: FactureCtrl/index3
ERROR - 2024-06-25 21:51:51 --> 404 Page Not Found: FactureCtrl/index3
ERROR - 2024-06-25 21:51:51 --> 404 Page Not Found: FactureCtrl/index3
ERROR - 2024-06-25 21:51:52 --> 404 Page Not Found: FactureCtrl/index3
ERROR - 2024-06-25 21:51:52 --> 404 Page Not Found: FactureCtrl/index3
ERROR - 2024-06-25 21:51:53 --> 404 Page Not Found: FactureCtrl/index31
ERROR - 2024-06-25 21:51:53 --> 404 Page Not Found: FactureCtrl/index31
ERROR - 2024-06-25 22:25:29 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:25:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:32:19 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:32:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:36:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:36:03 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:36:04 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:36:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:36:05 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:36:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:36:06 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:36:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:36:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:36:54 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:36:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:36:55 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:36:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:36:56 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:39:55 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:39:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:39:56 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:39:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:39:58 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:39:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:39:59 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:39:59 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:40:16 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:40:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:40:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:40:17 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:40:19 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:40:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:40:20 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:40:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:40:21 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:40:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:40:22 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:40:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:43:01 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:43:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:43:02 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:43:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:43:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:43:04 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:43:05 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:43:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:43:11 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:43:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:43:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:43:32 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:43:34 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:43:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:44:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:44:16 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:44:17 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:44:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:44:19 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:44:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:44:19 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:44:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:44:20 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:44:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:44:21 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:44:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:50:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:50:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:50:44 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:50:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:51:06 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:51:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:51:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:51:07 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:54:00 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:54:00 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:57:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 22:57:22 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:57:24 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 22:57:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 23:05:30 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 23:05:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 23:06:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 23:06:30 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 23:06:32 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 23:06:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 23:06:33 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 23:06:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 23:06:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 23:06:34 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 23:07:53 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 23:07:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 23:09:07 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 23:09:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 23:09:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 23:09:09 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 23:09:10 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 23:09:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 23:09:11 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 23:09:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 23:16:48 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 23:16:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 23:16:48 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 23:16:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 23:17:34 --> Severity: Warning --> Undefined variable $nom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:17:34 --> Severity: Warning --> Undefined variable $prenom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:17:35 --> Severity: Warning --> Undefined variable $nom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:17:35 --> Severity: Warning --> Undefined variable $prenom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:19:24 --> Severity: Warning --> Undefined variable $nom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:19:24 --> Severity: Warning --> Undefined variable $prenom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:19:24 --> Severity: Warning --> Undefined variable $nom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:19:24 --> Severity: Warning --> Undefined variable $prenom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:19:24 --> Severity: Warning --> Undefined variable $nom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:19:24 --> Severity: Warning --> Undefined variable $prenom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:19:25 --> Severity: Warning --> Undefined variable $nom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:19:25 --> Severity: Warning --> Undefined variable $prenom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:19:25 --> Severity: Warning --> Undefined variable $nom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:19:25 --> Severity: Warning --> Undefined variable $prenom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:19:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 23:19:28 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 23:19:30 --> Severity: Warning --> Undefined variable $utilisateurs C:\xampp\htdocs\assur_M_back\application\views\page\accueil.php 24
ERROR - 2024-06-25 23:19:30 --> Severity: Warning --> foreach() argument must be of type array|object, null given C:\xampp\htdocs\assur_M_back\application\views\page\accueil.php 24
ERROR - 2024-06-25 23:19:30 --> Severity: Warning --> Undefined variable $total_pages C:\xampp\htdocs\assur_M_back\application\views\page\accueil.php 47
ERROR - 2024-06-25 23:19:30 --> Severity: Warning --> Undefined variable $nom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:19:30 --> Severity: Warning --> Undefined variable $prenom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:20:22 --> Severity: Warning --> Undefined variable $nom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:20:22 --> Severity: Warning --> Undefined variable $prenom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:20:23 --> Severity: Warning --> Undefined variable $nom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:20:23 --> Severity: Warning --> Undefined variable $prenom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:20:23 --> Severity: Warning --> Undefined variable $nom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:20:23 --> Severity: Warning --> Undefined variable $prenom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:20:23 --> Severity: Warning --> Undefined variable $nom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:20:23 --> Severity: Warning --> Undefined variable $prenom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:20:39 --> Severity: Warning --> Undefined variable $nom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:20:39 --> Severity: Warning --> Undefined variable $prenom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:20:40 --> Severity: Warning --> Undefined variable $nom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:20:40 --> Severity: Warning --> Undefined variable $prenom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:20:40 --> Severity: Warning --> Undefined variable $nom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:20:40 --> Severity: Warning --> Undefined variable $prenom C:\xampp\htdocs\assur_M_back\application\views\templates\header.php 116
ERROR - 2024-06-25 23:21:25 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 23:21:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 23:21:28 --> Severity: Warning --> Undefined variable $utilisateurs C:\xampp\htdocs\assur_M_back\application\views\page\accueil.php 24
ERROR - 2024-06-25 23:21:28 --> Severity: Warning --> foreach() argument must be of type array|object, null given C:\xampp\htdocs\assur_M_back\application\views\page\accueil.php 24
ERROR - 2024-06-25 23:21:28 --> Severity: Warning --> Undefined variable $total_pages C:\xampp\htdocs\assur_M_back\application\views\page\accueil.php 47
ERROR - 2024-06-25 23:23:55 --> Severity: Warning --> Undefined variable $data C:\xampp\htdocs\assur_M_back\application\views\templates\template.php 2
ERROR - 2024-06-25 23:23:55 --> Severity: Warning --> Undefined variable $contents C:\xampp\htdocs\assur_M_back\application\views\templates\template.php 4
ERROR - 2024-06-25 23:23:56 --> Severity: Warning --> Undefined variable $data C:\xampp\htdocs\assur_M_back\application\views\templates\template.php 2
ERROR - 2024-06-25 23:23:56 --> Severity: Warning --> Undefined variable $contents C:\xampp\htdocs\assur_M_back\application\views\templates\template.php 4
ERROR - 2024-06-25 23:24:01 --> Severity: Warning --> Undefined variable $contents C:\xampp\htdocs\assur_M_back\application\views\templates\template.php 4
ERROR - 2024-06-25 23:24:02 --> Severity: Warning --> Undefined variable $contents C:\xampp\htdocs\assur_M_back\application\views\templates\template.php 4
ERROR - 2024-06-25 23:24:02 --> Severity: Warning --> Undefined variable $contents C:\xampp\htdocs\assur_M_back\application\views\templates\template.php 4
ERROR - 2024-06-25 23:24:56 --> Severity: Warning --> Undefined variable $contents C:\xampp\htdocs\assur_M_back\application\views\templates\template.php 4
ERROR - 2024-06-25 23:24:56 --> Severity: Warning --> Undefined variable $contents C:\xampp\htdocs\assur_M_back\application\views\templates\template.php 4
ERROR - 2024-06-25 23:24:56 --> Severity: Warning --> Undefined variable $contents C:\xampp\htdocs\assur_M_back\application\views\templates\template.php 4
ERROR - 2024-06-25 23:24:57 --> Severity: Warning --> Undefined variable $contents C:\xampp\htdocs\assur_M_back\application\views\templates\template.php 4
ERROR - 2024-06-25 23:25:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 23:25:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 23:26:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 23:26:01 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 23:26:03 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-25 23:26:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 23:26:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-25 23:26:05 --> 404 Page Not Found: Assets/vendors

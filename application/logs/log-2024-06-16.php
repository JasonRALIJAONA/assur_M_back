<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-06-16 11:47:03 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 11:47:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 11:47:03 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 11:47:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 11:47:04 --> 404 Page Not Found: StatistiqueCtrl/index
ERROR - 2024-06-16 11:47:10 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 11:47:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 11:47:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 11:47:10 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 11:48:00 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 11:48:00 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 11:48:24 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 11:48:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 11:48:28 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 11:48:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 11:48:32 --> 404 Page Not Found: StatistiqueCtrl/index
ERROR - 2024-06-16 11:53:12 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 11:53:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 11:53:13 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 11:53:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 11:53:14 --> 404 Page Not Found: StatistiqueCtrl/index
ERROR - 2024-06-16 11:54:28 --> 404 Page Not Found: StatistiqueCtrl/index
ERROR - 2024-06-16 11:54:29 --> 404 Page Not Found: StatistiqueCtrl/index
ERROR - 2024-06-16 11:57:41 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 11:57:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 11:57:41 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 11:57:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 11:57:41 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 11:57:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 11:57:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 11:57:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 11:57:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 11:57:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 11:57:44 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la relation « assurance » n'existe pas
LINE 2:         FROM facture f JOIN assurance a ON f.id_assurance = ...
                                    ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 11:57:44 --> Query error: ERREUR:  la relation « assurance » n'existe pas
LINE 2:         FROM facture f JOIN assurance a ON f.id_assurance = ...
                                    ^ - Invalid query: SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f JOIN assurance a ON f.id_assurance = a.id JOIN vehicule v ON f.id_vehicule = v.id WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted = FALSE AND a.deleted = FALSE AND v.deleted = FALSE GROUP BY a.nom ORDER BY user_count DESC
ERROR - 2024-06-16 12:00:07 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne f.id_assurance n'existe pas
LINE 2:         FROM facture f JOIN assureur a ON f.id_assurance = a...
                                                  ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:00:07 --> Query error: ERREUR:  la colonne f.id_assurance n'existe pas
LINE 2:         FROM facture f JOIN assureur a ON f.id_assurance = a...
                                                  ^ - Invalid query: SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f JOIN assureur a ON f.id_assurance = a.id JOIN vehicule v ON f.id_vehicule = v.id WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted = FALSE AND a.deleted = FALSE AND v.deleted = FALSE GROUP BY a.nom ORDER BY user_count DESC
ERROR - 2024-06-16 12:00:08 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne f.id_assurance n'existe pas
LINE 2:         FROM facture f JOIN assureur a ON f.id_assurance = a...
                                                  ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:00:08 --> Query error: ERREUR:  la colonne f.id_assurance n'existe pas
LINE 2:         FROM facture f JOIN assureur a ON f.id_assurance = a...
                                                  ^ - Invalid query: SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f JOIN assureur a ON f.id_assurance = a.id JOIN vehicule v ON f.id_vehicule = v.id WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted = FALSE AND a.deleted = FALSE AND v.deleted = FALSE GROUP BY a.nom ORDER BY user_count DESC
ERROR - 2024-06-16 12:00:08 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne f.id_assurance n'existe pas
LINE 2:         FROM facture f JOIN assureur a ON f.id_assurance = a...
                                                  ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:00:08 --> Query error: ERREUR:  la colonne f.id_assurance n'existe pas
LINE 2:         FROM facture f JOIN assureur a ON f.id_assurance = a...
                                                  ^ - Invalid query: SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f JOIN assureur a ON f.id_assurance = a.id JOIN vehicule v ON f.id_vehicule = v.id WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted = FALSE AND a.deleted = FALSE AND v.deleted = FALSE GROUP BY a.nom ORDER BY user_count DESC
ERROR - 2024-06-16 12:00:08 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne f.id_assurance n'existe pas
LINE 2:         FROM facture f JOIN assureur a ON f.id_assurance = a...
                                                  ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:00:08 --> Query error: ERREUR:  la colonne f.id_assurance n'existe pas
LINE 2:         FROM facture f JOIN assureur a ON f.id_assurance = a...
                                                  ^ - Invalid query: SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f JOIN assureur a ON f.id_assurance = a.id JOIN vehicule v ON f.id_vehicule = v.id WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted = FALSE AND a.deleted = FALSE AND v.deleted = FALSE GROUP BY a.nom ORDER BY user_count DESC
ERROR - 2024-06-16 12:03:01 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne f.deleted n'existe pas
LINE 3: ...   AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted ...
                                                             ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:03:01 --> Query error: ERREUR:  la colonne f.deleted n'existe pas
LINE 3: ...   AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted ...
                                                             ^ - Invalid query: SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f JOIN assureur a ON f.id_assureur = a.id JOIN vehicule v ON f.id_vehicule = v.id WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted = FALSE AND a.deleted = FALSE AND v.deleted = FALSE GROUP BY a.nom ORDER BY user_count DESC
ERROR - 2024-06-16 12:03:01 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne f.deleted n'existe pas
LINE 3: ...   AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted ...
                                                             ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:03:01 --> Query error: ERREUR:  la colonne f.deleted n'existe pas
LINE 3: ...   AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted ...
                                                             ^ - Invalid query: SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f JOIN assureur a ON f.id_assureur = a.id JOIN vehicule v ON f.id_vehicule = v.id WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted = FALSE AND a.deleted = FALSE AND v.deleted = FALSE GROUP BY a.nom ORDER BY user_count DESC
ERROR - 2024-06-16 12:03:02 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne f.deleted n'existe pas
LINE 3: ...   AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted ...
                                                             ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:03:02 --> Query error: ERREUR:  la colonne f.deleted n'existe pas
LINE 3: ...   AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted ...
                                                             ^ - Invalid query: SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f JOIN assureur a ON f.id_assureur = a.id JOIN vehicule v ON f.id_vehicule = v.id WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted = FALSE AND a.deleted = FALSE AND v.deleted = FALSE GROUP BY a.nom ORDER BY user_count DESC
ERROR - 2024-06-16 12:05:08 --> Severity: error --> Exception: Call to undefined method Statistique::get_assurance_plus_utilise() C:\xampp\htdocs\assur_M_back\application\controllers\statistiqueCtrl.php 13
ERROR - 2024-06-16 12:05:09 --> Severity: error --> Exception: Call to undefined method Statistique::get_assurance_plus_utilise() C:\xampp\htdocs\assur_M_back\application\controllers\statistiqueCtrl.php 13
ERROR - 2024-06-16 12:05:09 --> Severity: error --> Exception: Call to undefined method Statistique::get_assurance_plus_utilise() C:\xampp\htdocs\assur_M_back\application\controllers\statistiqueCtrl.php 13
ERROR - 2024-06-16 12:05:25 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne f.deleted n'existe pas
LINE 8:             AND f.deleted = FALSE
                        ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:05:25 --> Query error: ERREUR:  la colonne f.deleted n'existe pas
LINE 8:             AND f.deleted = FALSE
                        ^ - Invalid query: 
            SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
            FROM facture f
            JOIN assureur a ON f.id_assureur = a.id
            JOIN vehicule v ON f.id_vehicule = v.id
            WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
            AND EXTRACT(MONTH FROM f.date_debut) = '6'
            AND f.deleted = FALSE
            AND a.deleted = FALSE
            AND v.deleted = FALSE
            GROUP BY a.nom
            ORDER BY user_count DESC
        
ERROR - 2024-06-16 12:06:44 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne a.deleted n'existe pas
LINE 8:         AND a.deleted = FALSE
                    ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:06:44 --> Query error: ERREUR:  la colonne a.deleted n'existe pas
LINE 8:         AND a.deleted = FALSE
                    ^ - Invalid query: 
        SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f
        JOIN assureur a ON f.id_assureur = a.id
        JOIN vehicule v ON f.id_vehicule = v.id
        WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6'
        AND a.deleted = FALSE
        AND v.deleted = FALSE
        GROUP BY a.nom
        ORDER BY user_count DESC
    
ERROR - 2024-06-16 12:06:44 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne a.deleted n'existe pas
LINE 8:         AND a.deleted = FALSE
                    ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:06:44 --> Query error: ERREUR:  la colonne a.deleted n'existe pas
LINE 8:         AND a.deleted = FALSE
                    ^ - Invalid query: 
        SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f
        JOIN assureur a ON f.id_assureur = a.id
        JOIN vehicule v ON f.id_vehicule = v.id
        WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6'
        AND a.deleted = FALSE
        AND v.deleted = FALSE
        GROUP BY a.nom
        ORDER BY user_count DESC
    
ERROR - 2024-06-16 12:06:44 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne a.deleted n'existe pas
LINE 8:         AND a.deleted = FALSE
                    ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:06:44 --> Query error: ERREUR:  la colonne a.deleted n'existe pas
LINE 8:         AND a.deleted = FALSE
                    ^ - Invalid query: 
        SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f
        JOIN assureur a ON f.id_assureur = a.id
        JOIN vehicule v ON f.id_vehicule = v.id
        WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6'
        AND a.deleted = FALSE
        AND v.deleted = FALSE
        GROUP BY a.nom
        ORDER BY user_count DESC
    
ERROR - 2024-06-16 12:06:45 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne a.deleted n'existe pas
LINE 8:         AND a.deleted = FALSE
                    ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:06:45 --> Query error: ERREUR:  la colonne a.deleted n'existe pas
LINE 8:         AND a.deleted = FALSE
                    ^ - Invalid query: 
        SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f
        JOIN assureur a ON f.id_assureur = a.id
        JOIN vehicule v ON f.id_vehicule = v.id
        WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6'
        AND a.deleted = FALSE
        AND v.deleted = FALSE
        GROUP BY a.nom
        ORDER BY user_count DESC
    
ERROR - 2024-06-16 12:07:03 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne a.deleted n'existe pas
LINE 8:         AND a.deleted = FALSE
                    ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:07:03 --> Query error: ERREUR:  la colonne a.deleted n'existe pas
LINE 8:         AND a.deleted = FALSE
                    ^ - Invalid query: 
        SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f
        JOIN assureur a ON f.id_assureur = a.id
        JOIN vehicule v ON f.id_vehicule = v.id
        WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6'
        AND a.deleted = FALSE
        AND v.deleted = FALSE
        GROUP BY a.nom
        ORDER BY user_count DESC
    
ERROR - 2024-06-16 12:07:03 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne a.deleted n'existe pas
LINE 8:         AND a.deleted = FALSE
                    ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:07:03 --> Query error: ERREUR:  la colonne a.deleted n'existe pas
LINE 8:         AND a.deleted = FALSE
                    ^ - Invalid query: 
        SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f
        JOIN assureur a ON f.id_assureur = a.id
        JOIN vehicule v ON f.id_vehicule = v.id
        WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6'
        AND a.deleted = FALSE
        AND v.deleted = FALSE
        GROUP BY a.nom
        ORDER BY user_count DESC
    
ERROR - 2024-06-16 12:07:03 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne a.deleted n'existe pas
LINE 8:         AND a.deleted = FALSE
                    ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:07:03 --> Query error: ERREUR:  la colonne a.deleted n'existe pas
LINE 8:         AND a.deleted = FALSE
                    ^ - Invalid query: 
        SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f
        JOIN assureur a ON f.id_assureur = a.id
        JOIN vehicule v ON f.id_vehicule = v.id
        WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6'
        AND a.deleted = FALSE
        AND v.deleted = FALSE
        GROUP BY a.nom
        ORDER BY user_count DESC
    
ERROR - 2024-06-16 12:09:45 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:09:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:11:30 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne f.deleted n'existe pas
LINE 3: ...   AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted ...
                                                             ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:11:30 --> Query error: ERREUR:  la colonne f.deleted n'existe pas
LINE 3: ...   AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted ...
                                                             ^ - Invalid query: SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f JOIN assureur a ON f.id_assureur = a.id JOIN vehicule v ON f.id_vehicule = v.id WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted = FALSE AND a.deleted = FALSE AND v.deleted = FALSE GROUP BY a.nom ORDER BY user_count DESC
ERROR - 2024-06-16 12:11:30 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne f.deleted n'existe pas
LINE 3: ...   AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted ...
                                                             ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:11:30 --> Query error: ERREUR:  la colonne f.deleted n'existe pas
LINE 3: ...   AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted ...
                                                             ^ - Invalid query: SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f JOIN assureur a ON f.id_assureur = a.id JOIN vehicule v ON f.id_vehicule = v.id WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted = FALSE AND a.deleted = FALSE AND v.deleted = FALSE GROUP BY a.nom ORDER BY user_count DESC
ERROR - 2024-06-16 12:12:43 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:12:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:13:23 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:13:23 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:14:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:14:40 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:14:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:14:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:14:43 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:14:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:14:56 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:14:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:17:10 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:17:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:17:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:17:58 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:17:59 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:17:59 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:17:59 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:17:59 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:02 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:02 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:03 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:03 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:04 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:04 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:05 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:05 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:06 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:07 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:07 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:08 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:08 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:09 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:09 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:10 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:10 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:10 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:11 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:11 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:12 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:12 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:13 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:14 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:15 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:15 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:16 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:16 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:17 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:17 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:18 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:18 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:18 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:19 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:19 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:20 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:21 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:21 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:18:22 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:22 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:18:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:20:29 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne a.deleted n'existe pas
LINE 8:             AND a.deleted = FALSE
                        ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:20:29 --> Query error: ERREUR:  la colonne a.deleted n'existe pas
LINE 8:             AND a.deleted = FALSE
                        ^ - Invalid query: 
            SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
            FROM facture f
            JOIN assureur a ON f.id_assureur = a.id
            JOIN vehicule v ON f.id_vehicule = v.id
            WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
            AND EXTRACT(MONTH FROM f.date_debut) = '6'
            AND a.deleted = FALSE
            AND v.deleted = FALSE
            GROUP BY a.nom
            ORDER BY user_count DESC
        
ERROR - 2024-06-16 12:20:30 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne a.deleted n'existe pas
LINE 8:             AND a.deleted = FALSE
                        ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:20:30 --> Query error: ERREUR:  la colonne a.deleted n'existe pas
LINE 8:             AND a.deleted = FALSE
                        ^ - Invalid query: 
            SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
            FROM facture f
            JOIN assureur a ON f.id_assureur = a.id
            JOIN vehicule v ON f.id_vehicule = v.id
            WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
            AND EXTRACT(MONTH FROM f.date_debut) = '6'
            AND a.deleted = FALSE
            AND v.deleted = FALSE
            GROUP BY a.nom
            ORDER BY user_count DESC
        
ERROR - 2024-06-16 12:20:30 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne a.deleted n'existe pas
LINE 8:             AND a.deleted = FALSE
                        ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:20:30 --> Query error: ERREUR:  la colonne a.deleted n'existe pas
LINE 8:             AND a.deleted = FALSE
                        ^ - Invalid query: 
            SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
            FROM facture f
            JOIN assureur a ON f.id_assureur = a.id
            JOIN vehicule v ON f.id_vehicule = v.id
            WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
            AND EXTRACT(MONTH FROM f.date_debut) = '6'
            AND a.deleted = FALSE
            AND v.deleted = FALSE
            GROUP BY a.nom
            ORDER BY user_count DESC
        
ERROR - 2024-06-16 12:20:59 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne v.deleted n'existe pas
LINE 8:             AND v.deleted = FALSE
                        ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:20:59 --> Query error: ERREUR:  la colonne v.deleted n'existe pas
LINE 8:             AND v.deleted = FALSE
                        ^ - Invalid query: 
            SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
            FROM facture f
            JOIN assureur a ON f.id_assureur = a.id
            JOIN vehicule v ON f.id_vehicule = v.id
            WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
            AND EXTRACT(MONTH FROM f.date_debut) = '6'
            AND v.deleted = FALSE
            GROUP BY a.nom
            ORDER BY user_count DESC
        
ERROR - 2024-06-16 12:21:00 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne v.deleted n'existe pas
LINE 8:             AND v.deleted = FALSE
                        ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:21:00 --> Query error: ERREUR:  la colonne v.deleted n'existe pas
LINE 8:             AND v.deleted = FALSE
                        ^ - Invalid query: 
            SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
            FROM facture f
            JOIN assureur a ON f.id_assureur = a.id
            JOIN vehicule v ON f.id_vehicule = v.id
            WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
            AND EXTRACT(MONTH FROM f.date_debut) = '6'
            AND v.deleted = FALSE
            GROUP BY a.nom
            ORDER BY user_count DESC
        
ERROR - 2024-06-16 12:21:00 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne v.deleted n'existe pas
LINE 8:             AND v.deleted = FALSE
                        ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:21:00 --> Query error: ERREUR:  la colonne v.deleted n'existe pas
LINE 8:             AND v.deleted = FALSE
                        ^ - Invalid query: 
            SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
            FROM facture f
            JOIN assureur a ON f.id_assureur = a.id
            JOIN vehicule v ON f.id_vehicule = v.id
            WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
            AND EXTRACT(MONTH FROM f.date_debut) = '6'
            AND v.deleted = FALSE
            GROUP BY a.nom
            ORDER BY user_count DESC
        
ERROR - 2024-06-16 12:21:00 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne v.deleted n'existe pas
LINE 8:             AND v.deleted = FALSE
                        ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:21:00 --> Query error: ERREUR:  la colonne v.deleted n'existe pas
LINE 8:             AND v.deleted = FALSE
                        ^ - Invalid query: 
            SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
            FROM facture f
            JOIN assureur a ON f.id_assureur = a.id
            JOIN vehicule v ON f.id_vehicule = v.id
            WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
            AND EXTRACT(MONTH FROM f.date_debut) = '6'
            AND v.deleted = FALSE
            GROUP BY a.nom
            ORDER BY user_count DESC
        
ERROR - 2024-06-16 12:21:00 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne v.deleted n'existe pas
LINE 8:             AND v.deleted = FALSE
                        ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:21:00 --> Query error: ERREUR:  la colonne v.deleted n'existe pas
LINE 8:             AND v.deleted = FALSE
                        ^ - Invalid query: 
            SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
            FROM facture f
            JOIN assureur a ON f.id_assureur = a.id
            JOIN vehicule v ON f.id_vehicule = v.id
            WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
            AND EXTRACT(MONTH FROM f.date_debut) = '6'
            AND v.deleted = FALSE
            GROUP BY a.nom
            ORDER BY user_count DESC
        
ERROR - 2024-06-16 12:21:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:21:12 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:21:14 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:21:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:22:31 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne f.deleted n'existe pas
LINE 3: ...   AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted ...
                                                             ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:22:31 --> Query error: ERREUR:  la colonne f.deleted n'existe pas
LINE 3: ...   AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted ...
                                                             ^ - Invalid query: SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f JOIN assureur a ON f.id_assureur = a.id JOIN vehicule v ON f.id_vehicule = v.id WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted = FALSE AND a.deleted = FALSE AND v.deleted = FALSE GROUP BY a.nom ORDER BY user_count DESC
ERROR - 2024-06-16 12:22:31 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne f.deleted n'existe pas
LINE 3: ...   AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted ...
                                                             ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:22:31 --> Query error: ERREUR:  la colonne f.deleted n'existe pas
LINE 3: ...   AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted ...
                                                             ^ - Invalid query: SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f JOIN assureur a ON f.id_assureur = a.id JOIN vehicule v ON f.id_vehicule = v.id WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted = FALSE AND a.deleted = FALSE AND v.deleted = FALSE GROUP BY a.nom ORDER BY user_count DESC
ERROR - 2024-06-16 12:22:42 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne f.deleted n'existe pas
LINE 3: ...   AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted ...
                                                             ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:22:42 --> Query error: ERREUR:  la colonne f.deleted n'existe pas
LINE 3: ...   AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted ...
                                                             ^ - Invalid query: SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f JOIN assureur a ON f.id_assureur = a.id JOIN vehicule v ON f.id_vehicule = v.id WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted = FALSE AND a.deleted = FALSE AND v.deleted = FALSE GROUP BY a.nom ORDER BY user_count DESC
ERROR - 2024-06-16 12:22:43 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne f.deleted n'existe pas
LINE 3: ...   AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted ...
                                                             ^ C:\xampp\htdocs\assur_M_back\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2024-06-16 12:22:43 --> Query error: ERREUR:  la colonne f.deleted n'existe pas
LINE 3: ...   AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted ...
                                                             ^ - Invalid query: SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f JOIN assureur a ON f.id_assureur = a.id JOIN vehicule v ON f.id_vehicule = v.id WHERE EXTRACT(YEAR FROM f.date_debut) = '2024'
        AND EXTRACT(MONTH FROM f.date_debut) = '6' AND f.deleted = FALSE AND a.deleted = FALSE AND v.deleted = FALSE GROUP BY a.nom ORDER BY user_count DESC
ERROR - 2024-06-16 12:22:57 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:22:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:22:57 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:22:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:23:09 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:23:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:23:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:23:09 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:23:09 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:23:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:23:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:23:09 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:23:21 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:23:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:23:25 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:23:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:23:27 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:23:27 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:23:28 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:23:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:23:30 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:23:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:23:31 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:23:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:25:43 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:25:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:44:47 --> 404 Page Not Found: Statistique/assurance_plus_utilise
ERROR - 2024-06-16 12:44:47 --> 404 Page Not Found: Statistique/assurance_plus_utilise
ERROR - 2024-06-16 12:44:47 --> 404 Page Not Found: Statistique/assurance_plus_utilise
ERROR - 2024-06-16 12:44:48 --> 404 Page Not Found: Statistique/assurance_plus_utilise
ERROR - 2024-06-16 12:44:48 --> 404 Page Not Found: Statistique/assurance_plus_utilise
ERROR - 2024-06-16 12:44:48 --> 404 Page Not Found: Statistique/assurance_plus_utilise
ERROR - 2024-06-16 12:44:54 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:44:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:44:55 --> 404 Page Not Found: Statistique/assurance_plus_utilise
ERROR - 2024-06-16 12:48:34 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:48:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:48:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:48:34 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:48:34 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:48:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:48:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:48:38 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:48:39 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:48:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:48:41 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:48:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:48:43 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:48:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:49:09 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:49:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:49:12 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:49:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:49:13 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:49:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:49:14 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:49:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:49:15 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:49:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:49:15 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:49:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:49:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:49:16 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:49:17 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:49:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:49:31 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:49:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:50:37 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:50:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:50:38 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:50:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:50:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:50:38 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:50:39 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:50:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:50:39 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:50:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:50:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:50:39 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:50:39 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:50:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:50:39 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:50:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:50:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:50:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:52:24 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:52:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:52:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:52:41 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:53:38 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:53:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:53:38 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:53:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:53:39 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:53:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:53:39 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:53:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:53:41 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:53:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:53:41 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:53:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:53:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:53:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:53:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:53:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:56:17 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:56:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:56:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:56:18 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:56:18 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:56:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:57:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:57:03 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:57:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:57:03 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:57:03 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:57:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:57:04 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:57:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:57:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:57:29 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:57:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:57:51 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:58:07 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:58:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:58:20 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:58:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:58:52 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:58:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:58:53 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:58:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:58:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:58:53 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:58:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:58:54 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:58:54 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:58:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:59:16 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:59:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 12:59:26 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 12:59:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 13:00:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 13:00:29 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 13:00:30 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 13:00:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 13:00:30 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 13:00:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 13:04:02 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 13:04:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 13:04:03 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 13:04:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 13:04:17 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 13:04:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 13:07:37 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 13:07:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 13:07:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 13:07:41 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 13:07:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 13:07:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 13:07:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 13:07:44 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 13:07:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 13:07:45 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 13:07:47 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 13:07:47 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:48:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:48:20 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:48:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:48:22 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:48:23 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:48:23 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:48:24 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:48:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:48:25 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:48:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:48:26 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:48:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:48:27 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:48:27 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:48:32 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:48:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:48:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:48:33 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:48:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:48:37 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:48:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:48:38 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:48:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:48:38 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:50:16 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:50:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:50:39 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:50:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:52:21 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:52:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:52:24 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:52:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:52:29 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:52:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:52:30 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:52:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:52:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:52:32 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:52:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:52:34 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:52:36 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:52:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:52:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:52:43 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:54:38 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:54:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:55:14 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:55:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:55:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:55:24 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:55:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:55:26 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:55:28 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:55:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:55:32 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:55:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 16:55:36 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 16:55:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 17:12:28 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 17:12:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 17:12:28 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 17:12:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 17:42:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 17:42:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 17:42:44 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 17:42:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 17:42:47 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 17:42:47 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 17:42:52 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 17:42:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 17:42:54 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 17:42:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 17:43:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 17:43:33 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 17:43:33 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 17:43:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 17:45:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 17:45:15 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 17:45:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 17:45:15 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 17:45:15 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 17:45:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 17:45:19 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 17:45:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 17:45:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 17:45:20 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 17:45:21 --> 404 Page Not Found: ServiceClientController/messages
ERROR - 2024-06-16 17:45:36 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 17:45:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 17:45:36 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 17:45:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 17:45:37 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 17:45:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 17:45:37 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 17:45:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 17:45:38 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 17:45:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-16 17:45:39 --> 404 Page Not Found: ServiceClientController/messages
ERROR - 2024-06-16 18:16:35 --> 404 Page Not Found: Assets/vendors
ERROR - 2024-06-16 18:16:35 --> 404 Page Not Found: Assets/js

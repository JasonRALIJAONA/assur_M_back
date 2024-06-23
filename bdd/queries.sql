-- Options plus utilisé
SELECT o.nom, COUNT(*) AS usage
FROM payement p
JOIN vehicule v ON p.id_vehicule = v.id
JOIN options o ON v.id_options = o.id
WHERE p.date_payement BETWEEN '2023-01-01' AND '2025-12-31'
GROUP BY o.nom
ORDER BY usage DESC;



-- Frequence de paiement
SELECT EXTRACT(YEAR FROM f.date_debut) AS annee, 
EXTRACT(MONTH FROM f.date_debut) AS mois, 
COUNT(*) AS nombre_paiements 
FROM facture f 
WHERE f.date_debut BETWEEN '2023-01-01' AND '2025-01-01'
GROUP BY annee, mois 
ORDER BY annee, mois

-- Assurance par semaine
WITH weekly_usage AS (
    SELECT DATE_TRUNC('week', f.date_debut) AS week, 
    COUNT(DISTINCT u.id) AS user_count  
    FROM facture f 
    JOIN vehicule v ON f.id_vehicule = v.id 
    JOIN utilisateur u ON v.id_utilisateur = u.id 
    WHERE f.id_assureur = 1
    AND f.date_debut BETWEEN '2023-01-01' AND '2025-01-01'
    GROUP BY week 
),
filtered_weeks AS (
    SELECT week, user_count 
    FROM weekly_usage 
) SELECT week, user_count FROM filtered_weeks ORDER BY week


SELECT f.id_assureur, a.nom, 
COUNT(DISTINCT v.id_utilisateur) AS nombre_utilisateurs 
FROM facture f 
JOIN assureur a ON f.id_assureur = a.id 
JOIN vehicule v ON f.id_vehicule = v.id 
JOIN utilisateur u ON v.id_utilisateur = u.id 
WHERE f.date_debut BETWEEN '2023-01-01' AND '2023-03-31'
GROUP BY a.nom, f.id_assureur 
ORDER BY a.nom, f.id_assureur



-- Chiffre d'affaire d'une assurance
SELECT a.nom, p.date_payement,
SUM(p.valeur*(100-a.commission)/100) AS chiffre_affaire
FROM payement p
JOIN vehicule v ON p.id_vehicule = v.id
JOIN assureur a ON v.id_assureur = a.id
WHERE a.id = 1
AND  p.date_payement BETWEEN '2023-01-01' AND '2023-03-31'
GROUP BY a.nom, p.date_payement
ORDER BY p.date_payement;

SELECT a.nom, SUM(p.valeur*(100-a.commission)/100) AS chiffre_affaire
FROM assureur a
JOIN vehicule v ON v.id_assureur = a.id
JOIN payement p ON p.id_vehicule = v.id
WHERE a.id = 2
AND  p.date_payement BETWEEN '2023-01-01' AND '2023-03-31'
GROUP BY a.nom
ORDER BY chiffre_affaire DESC;



-- Chiffre d'affaire par assurance
SELECT a.nom, p.date_payement,
SUM(p.valeur*a.commission/100) AS chiffre_affaire
FROM payement p
JOIN vehicule v ON p.id_vehicule = v.id
JOIN assureur a ON v.id_assureur = a.id
WHERE p.date_payement BETWEEN '2023-01-01' AND '2023-03-31'
GROUP BY a.nom, p.date_payement
ORDER BY p.date_payement;

SELECT a.nom AS assureur,
SUM(p.valeur*a.commission/100) AS chiffre_affaire
FROM payement p
JOIN vehicule v ON p.id_vehicule = v.id
JOIN assureur a ON v.id_assureur = a.id
WHERE p.date_payement BETWEEN '2023-01-01' AND '2023-03-31'
GROUP BY a.nom
ORDER BY chiffre_affaire DESC;
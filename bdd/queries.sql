-- Chiffre d'affaire d'une assurance
SELECT a.nom,
EXTRACT(DAY FROM p.date_payement) AS jour,
SUM(p.valeur) AS chiffre_affaire
FROM payement p
JOIN vehicule v ON p.id_vehicule = v.id
JOIN assureur a ON v.id_assureur = a.id
WHERE a.id = 2
AND EXTRACT(MONTH FROM p.date_payement) = 1
AND EXTRACT(YEAR FROM p.date_payement) = 2023
GROUP BY a.nom, EXTRACT(DAY FROM p.date_payement)
ORDER BY a.nom, jour;

SELECT a.nom, SUM(p.valeur) AS chiffre_affaire
FROM assureur a
JOIN vehicule v ON v.id_assureur = a.id
JOIN payement p ON p.id_vehicule = v.id
WHERE a.id = 1
AND EXTRACT(MONTH FROM p.date_payement) = 1
AND EXTRACT(YEAR FROM p.date_payement) = 2024
GROUP BY a.nom
ORDER BY chiffre_affaire DESC;



-- Chiffre d'affaire par assurance
SELECT a.nom,
EXTRACT(DAY FROM p.date_payement) AS jour,
SUM(p.valeur) AS chiffre_affaire
FROM payement p
JOIN vehicule v ON p.id_vehicule = v.id
JOIN assureur a ON v.id_assureur = a.id
WHERE EXTRACT(MONTH FROM p.date_payement) = 1
AND EXTRACT(YEAR FROM p.date_payement) = 2024
GROUP BY a.nom, EXTRACT(DAY FROM p.date_payement)
ORDER BY a.nom, jour;

SELECT a.nom, SUM(p.valeur) AS chiffre_affaire
FROM assureur a
JOIN vehicule v ON v.id_assureur = a.id
JOIN payement p ON p.id_vehicule = v.id
WHERE EXTRACT(MONTH FROM p.date_payement) = 1
AND EXTRACT(YEAR FROM p.date_payement) = 2024
GROUP BY a.nom
ORDER BY chiffre_affaire DESC;
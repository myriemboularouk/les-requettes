<?php

- Voir des bases de données:
SHOWDATABASES;
--Supprimer une BDD :
DROP DATABASE nom_de _la _base de_données;
--Se connecter à une BDD :
USE jeudi;
--Voir les tables de la BDD :
SHOW TABLES;
-- Créer une nouvelle BDD :
CREATE DARABASE nom_ de_la _nouvelle BDD;
--Afficher toutes les infos de tous les employés : 
SELECT * FROM employés;
-- Afficher les employés(nom, prenom) plus salaire de tous les employés:
SELECT prenom, nom, salaire FROM employés;
--Afficher tous les services de mon entreprise : 
SELECT DISTINC  service FROM employes;--DISTINCT permet d'éviter les doublons.
--Afficher tous les employés du service informatique : 
SELECT prenom, nom, service FROM employes WHERE service = 'informatique';
--Afficher les employés qui ne sont pas du service informatique :
SELECT prenom, nom, service FROM employes WHERE service != 'informatique';
--Afficher les employes qui gagnent un salaire sup à 2000€ :
SELECT prenom, nom, salaire FROM employes WHERE salaire >2000;--(<>= different)
--Afficher combien de personne gagne moins de 2000 € :
SELECT COUNT (*) employes WHERE salaire <= 2000;
--AS permet de créer un alias
SELECT COUNT(*) AS somme FROM employes WHERE salaire <= 2000;
-- Afficher la masse salariale annuelle de mon entreprise :
SELECT SUM(salaire * 12) AS masse_salariale FROM employes;
--Afficher les employes avec un prenom commencant par un A :
SELECT prenom FROM employes WHERE prenom LIKE 'a%';
--Afficher les employes dont le nom contient un A :
SELECT prenom FROM employes WHERE prenom LIKE '%a%';-- avec LIKE le' % 'signifie peut importe ceux qui suit ou peut importe ceux qui précède.
--Afficher tous les employes dans un ordre decroissant pour les salaires:
SELECT prenom, nom, salaire FROM employes ORDER BY salaire DESC;
--Afficher les 3 employes les mieux payés :
SELECT prenom, nom, salaire FROM employes ORDER BY salaire DESC LIMIT 0,3;
SELECT prenom, nom, salaire FROM employes ORDER BY salaire DESC LIMIT 3,3;
--Afficher l'employe le moins payé:
SELECT prenom, nom, salaire FROM employes ORDER BY salaire ASC LIMIT 0,1;
--Afficher le plus petit salaire : 
SELECT MIN(salaire) FROM employes;
--Afficher le prenom employes plus petit salaire :
--requète imbriquée.
SELECT prenom FROM employes ORDER BY MAX(salaire);
SELECT prenom, salaire FROM employes WHERE salaire = (SELECT min(salaire) FROM employes);
--Afficher tous les employes des services informatique et commercial.
SELECT prenom, nom, service FROM employes WHERE service = 'informatique' OR service = 'commercial';
SELECT prenom, nom, service FROM employes WHERE service IN ('informatique','commercial');--même requète synthaxe différente.
--Afficher tous les employes hors service informatique et commercial.
SELECT prenom, nom, service FROM employes WHERE service !='informatique'AND service !='commercial';
SELECT prenom, nom, service FROM employes WHERE service NOT IN ('informatique','commercial');--même requète synthaxe differente.
--Afficher le nombre de femme dans l'entreprise.
SELECT count(*)  FROM employes WHERE sexe = 'f';
--Afficher le nombre d'employes par sexe:
SELECT sexe, COUNT(*) FROM employes GROUP BY sexe;
-- Afficher le nombre d'informaticien et le nombre de commercial.
SELECT count(*) FROM employes WHERE service IN ('commercial','informatique') GROUP BY service;
SELECT service, count(*) FROM employes GROUP BY service HAVING service IN.



?>
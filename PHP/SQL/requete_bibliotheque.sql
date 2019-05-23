-- Afficher les numeros des livres qui n'ont pas été rendus :

    -- resultat : 100, 105

SELECT id_livre FROM emprunt WHERE date_rendu IS NULL ;

-- => la valeur NULL se teste avec le mot clé 'IS' ! (à la palce du '=')

-------------------------------------------------------------------------
-- Requetes Imbriquées : (sur plusieurs tables)

-- Afficher les abonnées ayant emprunté un livre le 07-12-2016
    -- resultat :guillaume, Benoit

SELECT prenom FROM abonne WHERE id_abonne IN ( SELECT id_abonne FROM emprunt WHERE date_sortie = '2016-12-07');

-- Afficher les titres des livres qui n'ont pas été rendus 
    -- resultat : une vie , les trois mousquetaires

SELECT titre FROM livre WHERE id_livre IN ( SELECT id_livre FROM emprunt WHERE date_rendu IS NULL);

-- Afficher les abonnée n'ayant pas rendu les livre 
    -- resultat : Benoit, chloé

SELECT prenom FROM abonne WHERE id_abonne IN ( SELECT id_abonne FROM emprunt WHERE date_rendu IS NULL);

-- Afficher le nombre de livres que guillaume a emprunté à la bibliotheque  
    -- resultat : 2

SELECT count(*) FROM emprunt WHERE id_abonne IN ( SELECT id_abonne FROM abonne WHERE prenom = 'Guillaume');


-- Afficher les prénoms des abonnés ayant déjà emprunté un livre d'Alphonse Daudet:
	-- => Resultat :'Laura'

SELECT prenom FROM abonne WHERE id_abonne IN ( SELECT id_abonne FROM emprunt WHERE id_livre IN (SELECT id_livre FROM livre WHERE auteur ='ALPHONSE DAUDET'));

-- Afficher les numéros et les titres des livres que Chloé a emprunté à la bibliothèque:
	-- => Resultat : 100, 105 ('une vie', 'les trois mousquetaires')

SELECT id_livre,titre FROM livre WHERE id_livre IN( SELECT id_livre FROM emprunt WHERE id_abonne IN(SELECT id_abonne FROM abonne WHERE prenom = "chloé" ));

-- Afficher les titres des livres que chloé n'a pas encore emprunté à la bibliothèque:
	-- => 'Bel-ami', 'Le père Goriot', 'Le petit chose', 'La Reine Margot'

    SELECT titre FROM livre WHERE id_livre NOT IN( SELECT id_livre FROM emprunt WHERE id_abonne IN(SELECT id_abonne FROM abonne WHERE prenom="chloé"));


-- Afficher les titres des livres que chloé n'a pas encore rendu à la bibliothèque:
	-- => Resultat : 'Les trois mousquetaires'
SELECT titre FROM livre WHERE id_livre IN(SELECT id_livre FROM emprunt WHERE date_rendu IS NULL AND id_abonne IN(SELECT id_abonne FROM abonne WHERE prenom = "chloé"));

-- Qui a emprunté le plus de livre à la bibliothèque : (Benoit)

SELECT penom FROM abonne WHERE id_abonne = (SELECT id_abonne FROM emprunt GROUP BY id_abonne ORDER BY COUNT(id_abonne) DESC LIMIT 0,1);

----------------------------------------------------------------------------------------------

-- JOINTURES :
-- DIfférence entre jointure et requêtes imbriquées :
-- Les deux permettent de faire des relations entres les différentes tables afin d'avoir des colonnes associées pour ne former qu'un seule résultat.

-- Une jointure sera possible DANS TOUS LES CAS !
-- Des requêtes imbriquées ne seront possible seulement dans le cas où le résultat est issu d'une même table.

-- Afficher les dates de sorties et de rendues pour l'abonne guillaume :
    -- Guillaume | 2011-12-17 | 2011-12-18
    -- Guillaume | 2011-12-19 | 2011-12-28

SELECT date_sortie, date_rendu FROM emprunt WHERE id_abonne = (SELECT id_abonne FROM abonne WHERE prenom ="guillaume");

SELECT abonne.prenom, emprunt.date_sortie, emprunt.date_rendu
FROM abonne, emprunt
WHERE abonne.id_abonne = emprunt.id_abonne
AND abonne.prenom = 'Guillaume';


SELECT a.prenom, e.date_sortie, e.date_rendu
FROM abonne a, emprunt e
WHERE a.id_abonne = e.id_abonne
AND a.prenom = 'Guillaume';

--------------------------------------------------------------------------------------------------------------------

-- o exercice : Nous aimerions connaitre les mouvements des livres (date de sortie et de rendu) écrit par « Alphonse Daudet » : (2 solutions)
-- +-------------+------------+
-- | date_sortie | date_rendu |
-- +-------------+------------+
-- | 2014-12-19  | 2014-12-22 |
-- +-------------+------------+
SELECT e.date_sortie, e.date_rendu
FROM emprunt e, livre li
WHERE e.id_livre = li.id_livre
AND li.auteur = 'ALphonse Daudet';

SELECT date_sortie, date_rendu FROM emprunt WHERE id_livre IN(SELECT id_livre FROM livre WHERE auteur ='Alphonse Dauet');
    
-- ----------------------------------------------------------------
-- o exercice: Qui a emprunté le livre "Une Vie" sur l'année 2016' ? : (2 solutions)
-- +-----------+
-- | prenom    |
-- +-----------+
-- | guillaume |
-- | chloe     |
-- +-----------+

SELECT a.prenom
FROM abonne a, emprunt e , livre li
WHERE a.id_abonne = e.id_abonne
AND  e.id_livre = li.id_livre
AND  li.titre = 'une vie'
AND  e.date_sortie like '2016%';

SELECT prenom FROM abonne WHERE id_abonne IN(
    SELECT id_abonne FROM emprunt WHERE date_sortie like '2016%' AND id_livre IN(
        SELECT id_livre FROM livre WHERE titre = 'une vie'));
------------------------------------------------------------------
-- o exercice : Nous aimerions connaitre le nombre de livre(s) emprunté(s) par chaque abonné. :
-- +-----------+----------------------+
-- | prenom    | nb de livre emprunte |
-- +-----------+----------------------+
-- | guillaume |                    2 |
-- | benoit    |                    3 |
-- | chloe     |                    2 |
-- | laura     |                    1 |
-- +-----------+----------------------+

SELECT a.prenom, count(*)AS "nombre de livre emprunté"
FROM  abonne a, emprunt e
WHERE a.id_abonne = e.id_abonne
GROUP BY a.id_abonne;




-- ------------------------------------------------------------
-- o exercice : Nous aimerions connaitre le nombre de livre(s) a rendre pour chaque abonné. :
-- +--------+----------------------+
-- | prenom | nb de livre a rendre |
-- +--------+----------------------+
-- | Benoit |                    1 |
-- | Chloe  |                    1 |
-- +--------+----------------------+

SELECT a.prenom, count(*)AS "nombre de livre à rendre" 
FROM abonne a, emprunt e
WHERE a.id_abonne = e.id_abonne
AND e.date_rendu IS NULL
GROUP BY a.prenom;

-- ----------------------------------------------------------------
-- o  exercice : Qui a emprunté Quoi ? et Quand ? (Titre des livres emprunté, à quel date, et savoir par qui).
-- +-----------+-------------+-------------------------+
-- | prenom    | date_sortie | titre                   |
-- +-----------+-------------+-------------------------+
-- | guillaume | 2011-12-17  | Une vie                 |
-- | guillaume | 2011-12-19  | La Reine Margot         |
-- | benoit    | 2011-12-18  | Bel-Ami                 |
-- | benoit    | 2012-03-20  | Les Trois Mousquetaires |
-- | benoit    | 2012-06-15  | Une vie                 |
-- | chloe     | 2011-12-19  | Une vie                 |
-- | chloe     | 2012-06-13  | Les Trois Mousquetaires |
-- | laura     | 2011-12-19  | Le Petit chose          |
-- +-----------+-------------+-------------------------+


SELECT a.prenom, li.titre, e.date_sortie
FROM abonne a, emprunt e, livre li
WHERE a.id_abonne = e.id_abonne
AND li.id_livre = e.id_livre;



-- -------------------------------------------------------------
-- o  exercice/exemple : Afficher les prenoms des abonnés avec les no des livres quils ont emprunté.
-- +-----------+----------+
-- | prenom    | id_livre |
-- +-----------+----------+
-- | guillaume |      100 |
-- | guillaume |      104 |
-- | benoit    |      101 |
-- | benoit    |      105 |
-- | benoit    |      100 |
-- | chloe     |      100 |
-- | chloe     |      105 |
-- | laura     |      103 |
-- +-----------+----------+


SELECT a.prenom, e.id_livre
FROM abonne a, emprunt e
WHERE a.id_abonne = e.id_abonne;




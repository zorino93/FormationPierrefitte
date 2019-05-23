<!-- On considère une entreprise de ventes de voitures.//(database)
 Un modèle de voiture est décrit par une
marque, une dénomination./*(table)*/

* Une voiture /*(table)*/ est identifiée par un numéro de série //(colonne), et a un modèle //(colonne), une
couleur //(colonne) et un prix affiché //(colonne) et un coût //(colonne) (prix auquel la voiture est revenue).//(colonne)

* Des clients /*(table)*/, on connaı̂t le nom //(colonne), le prénom //(colonne) et l’adresse //(colonne). Parmi les clients, on trouve les anciens propriétaires des voitures
d’occasion //(colonne), ainsi que les personnes ayant acheté une voiture au magasin. //(colonne)

* Lorsqu’une vente est réalisée, on en connaı̂t le vendeur /*(table)*/ (dont on connaı̂t le nom, le prénom, l’adresse et le salaire fixe)
et le prix d’achat réel (en tenant compte d’un rabais éventuel). Chaque vendeur touche une prime
de 5 % de la différence entre le prix d’achat affiché et le coût de la voiture. //(colonne)

* L’entreprise est répartie sur un certain nombre de magasins et chaque vendeur opère dans un magasin unique. Chaque
voiture est, ou à été, stockée dans certains magasins et est vendue dans le dernier magasin où elle
a été stockée. On garde trace des dates d’arrivée dans et de départ des magasins. Un transfert de
voiture entre deux magasins se fait dans la journée.

* 1. Donner un diagramme Entité/Association pour représenter ces données
* 2. Donner un schéma de base de données correspondant à ce diagramme
* 3. Créé la base, table(fait)
* 4. Écrire les requêtes suivantes en SQL:
	Donner la liste des voitures (numéro) vendues après le 15 avril 2007.
	Donner la voiture qui à rapporté le plus d'argent
	Donner le vendeur ayant accordé le plus gros rabais.
	Les bénéfices de chaque magasin pour le mois de janvier 2007.
	Le meilleur client (celui ayant rapporté le plus d’argent à l’entreprise).
	La marque pour laquelle on a accordé le plus de rabais. -->

<?php
	$bdd = new PDO('mysql:host=localhost; dbname=mabase;','root','');

	/* Donner la liste des voitures (numéro) vendues après le 15 avril 2007.*/
	$requete = $bdd->query('SELECT numserie FROM voiture WHERE numserie = ')
	/*Donner la voiture qui à rapporté le plus d'argent*/

	/*Donner le vendeur ayant accordé le plus gros rabais.*/

	/*Les bénéfices de chaque magasin pour le mois de janvier 2007.*/

	/*Le meilleur client (celui ayant rapporté le plus d’argent à l’entreprise).*/

	/*La marque pour laquelle on a accordé le plus de rabais.*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	
</body>
</html>
	


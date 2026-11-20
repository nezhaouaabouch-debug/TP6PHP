
# TP6 – Développement Web avec PHP, MySQL et PDO

## 1. Présentation du TP

Ce TP a pour objectif de découvrir le langage PHP et de pratiquer son utilisation avec HTML, les formulaires et les bases de données MySQL.

Il permet également d'apprendre à connecter une application PHP à une base de données en utilisant PDO et à afficher les données récupérées.

## 2. Objectifs du TP

- Comprendre les bases du langage PHP.
- Afficher des informations avec PHP.
- Utiliser PHP avec HTML.
- Manipuler les paramètres GET et POST.
- Créer et traiter des formulaires.
- Effectuer des opérations avec PHP.
- Créer et importer une base de données MySQL.
- Établir une connexion avec PDO.
- Exécuter des requêtes SQL.
- Récupérer et afficher les produits dans un tableau HTML.

## 3. Environnement de travail

Les outils utilisés pendant ce TP :

- Visual Studio Code : éditeur de code.
- XAMPP : serveur local.
- Apache : exécution des fichiers PHP.
- MySQL : gestion de la base de données.
- PHP : langage de programmation côté serveur.
- phpMyAdmin : gestion de la base de données.

## 4. Organisation du projet
TP6/
│
├── 01-hello.php
├── 02-php-html.php
├── 03-get.php
├── 04-post.php
├── 05-formulaire.php
│
└── database/
    ├── database.sql
    ├── 06-connexion.php
    └── 07-select.php

## 5. Réalisation des activités

### Activité 1 : Introduction à PHP

Découverte du langage PHP et utilisation de l'instruction `echo` pour afficher du texte et des informations.

Utilisation également de la fonction `date()` pour afficher la date.

### Activité 2 : PHP et HTML

Apprentissage de l'intégration du code PHP dans une page HTML.

Utilisation des balises HTML et des instructions PHP dans le même fichier.

### Activité 3 : Méthode GET

Utilisation de la méthode GET pour transmettre des données à travers l'URL.

Utilisation de `$_GET` pour récupérer les paramètres envoyés.

Utilisation de `isset()` pour vérifier si un paramètre existe.

### Activité 4 : Méthode POST

Découverte de la méthode POST pour envoyer les données d'un formulaire.

Utilisation de `$_POST` pour récupérer les informations saisies par l'utilisateur.

### Activité 5 : Formulaire et calcul

Création d'un formulaire HTML et récupération des valeurs saisies par l'utilisateur avec PHP.

Réalisation d'un calcul à partir des données du formulaire et affichage du résultat.

### Activité 6 : Base de données MySQL

Importation du fichier SQL dans MySQL à l'aide de phpMyAdmin.

Découverte de la base de données et de la table des produits.

### Activité 7 : Connexion avec PDO

Création du fichier `06-connexion.php` pour établir une connexion entre PHP et MySQL.

Utilisation de PDO pour communiquer avec la base de données.

### Activité 8 : Affichage des produits

Création du fichier `07-select.php` pour récupérer et afficher les produits.

Utilisation de la requête SQL :

SELECT * FROM products WHERE price > 300;

Utilisation de :

- `query()` pour exécuter la requête SQL.
- `fetchAll(PDO::FETCH_ASSOC)` pour récupérer les résultats.
- `foreach` pour parcourir les produits.
- `count()` pour vérifier le nombre de produits.
- `htmlspecialchars()` pour sécuriser l'affichage du nom du produit.

Les produits sont affichés dans un tableau HTML contenant :

- Nom
- Prix
- Quantité
- Total stock

Le total stock est calculé avec la formule :

    **Total stock = Prix × Quantité**

Si aucun produit n'est trouvé, le message suivant est affiché :

`Aucun produit trouvé.`

## 6. Conclusion
Ce TP m'a permis de mettre en pratique les bases de PHP, de manipuler les données des formulaires et de communiquer avec une base de données MySQL pour créer des pages web dynamiques.

** Réalisé par :Nazha Ouaabouch

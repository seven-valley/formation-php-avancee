# Ajouter avec PDO
:one : Il faut Préparer
:two : Binder
:three: excécuter
  
Pour se protéger de l'injection de dépendances
La documentation :
https://www.php.net/manual/en/pdostatement.bindvalue.php

## Objectif SQL
```sql
INSERT INTO personne (nom,prenom) VALUES ("DUJARDIN","JEAN");
```

## Montrer ce qy'il ne faut pas faire
...

## Création de la requête INSERT
```php
// On vient définir les variables à binder
$sql = "INSERT INTO personne (nom,prenom) VALUES (:nom,:prenom)";
// On envoit la requête à préparer
$query = $pdo->prepare($sql);
// On ajoute variable par variable
// On vient binder
$query->bindValue(':nom', "DUJARDIN");
$query->bindValue(':prenom', "Jean");
$query->execute();
```


Aller plus loin  
On peut préciser le Type de variable à binder  
```php
$query->bindValue(':nom', "DUJARDIN",PDO::PARAM_STR);
$query->bindValue(':prenom', "Jean",PDO::PARAM_STR);
```


## Création de la requête INSERT avec un objet
Maintenant travaillons avec des objets
```php
$personne = new Personne();
$personne->setPrenom ("Jean");
$personne->setNom ("DUJARDIN");

$sql = "INSERT INTO personne (nom,prenom) VALUES (:nom,:prenom)";
$query = $pdo->prepare($sql);
$query->bindValue(':nom', $personne->getNom(),PDO::PARAM_STR);
$query->bindValue(':prenom', $personne->getPrenom(),PDO::PARAM_STR);
$query->execute();
```


# le code complet :
<code> 02-test-pdo-insert.php</code>

```php
require_once('./config/config.php');
//------------------------------------------------------
try{   
    $pdo = new \PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS);
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

}catch(\Exception $e){
    die('Erreur : ' . $e->getMessage());
}
//------------------------------------------------------

$personne = new Personne();
$personne->setPrenom ("Jean");
$personne->setNom ("DUJARDIN");

$sql = "INSERT INTO personne (nom,prenom) VALUES (:nom,:prenom)";
$query = $pdo->prepare($sql);
$query->bindValue(':nom', $personne->getNom(),PDO::PARAM_STR);
$query->bindValue(':prenom', $personne->getPrenom(),PDO::PARAM_STR);
$query->execute();
```

# récupérer l'ID ?
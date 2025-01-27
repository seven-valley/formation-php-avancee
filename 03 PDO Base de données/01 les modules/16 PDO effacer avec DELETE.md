# Ajouter avec PDO
:one : Il faut Préparer
:two : Binder
:three: excécuter
  
Pour se protéger de l'injection de dépendances

La documentation :
https://www.php.net/manual/en/pdostatement.bindvalue.php

## Objectif SQl
```sql
DELETE FROM personne WHERE id =1;
```

## Création de la requête INSERT
```php
$personne = new Personne();
$personne->setPrenom ("Jean");
$personne->setNom ("DUJARDIN");
$personne->setId (1);
$sql = "DELETE FROM personne  WHERE id=:id";
$query = $pdo->prepare($sql);
$query->bindValue(':id', $personne->getId(),PDO::PARAM_INT);
$query->execute();
```


# le code complet :
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
$personne->setId (1);
$sql = "DELETE FROM personne  WHERE id=:id";
$query = $pdo->prepare($sql);
$query->bindValue(':id', $personne->getId(),PDO::PARAM_INT);
$query->execute();
```
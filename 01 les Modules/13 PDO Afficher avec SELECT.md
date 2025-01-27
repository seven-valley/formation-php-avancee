# 13 Afficher avec SELECT et PDO

## :one: Définir les constantes
Dans le fichier <code>config.php</code>
Nous allons définir les variables de connexion à la base de données
```php
define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASS', '');
define ('DB_NAME', 'vip_cocktail');
```

## :two: Connexion avec PDO
Dans le fichier <code>01-test-pdo-select.php</code>
```php
 $pdo = new \PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS);
 $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
```
Nous allons verifier si la connexion se passe bien  
avec <code>try catch</code>

## :three: vérifier la connexion
```php
try{   
    $pdo = new \PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS);
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
//return $db;
}catch(\Exception $e){
    die('Erreur : ' . $e->getMessage());
}
```


## :four: Création de la requête

```php
$sql = $pdo->query("SELECT * from personne");
$personnes = $sql->fetchAll();
var_dump($personnes);
```
Nous optenons un tableau 2 dimensions

## :four: récupérer des objets
```php
$sql = $pdo->query("SELECT * from personne");
$personnes = $sql->fetchAll();
var_dump($personnes);
```
Nous optenons un tableau 2 dimensions avec des objets


# le code complet :
<code> 01-test-pdo-select.php</code>

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

$sql = $pdo->query("SELECT * from personne");
$personnes = $sql->fetchAll(PDO::FETCH_OBJ);
var_dump($personnes);
```
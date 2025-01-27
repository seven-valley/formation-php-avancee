# 18 Mise en place des méthodes


# mise en place de la méthode save : INSERT
```php
<?php
    class Personne{

    //...
    public function save():void{    
        $pdo = DB::connect();
        $sql = "INSERT INTO personne (nom,prenom) VALUES (:nom,:prenom)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':nom', $this->nom);
        $query->bindValue(':prenom', $this->prenom);
        $query->execute();
        $this->setId ($pdo->lastInsertId());
    }
    //...
    }
```

# mise en place de la méthode update : UPDATE
```php
<?php
    class Personne{

    //...
    public function save():void{    
        $pdo = DB::connect();
        $sql = "UPDATE  personne  SET nom =:nom, prenom=:prenom WHERE id=:id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':nom', $this->getNom(), \PDO::PARAM_STR);
        $query->bindValue(':prenom', $this->getPrenom(), \PDO::PARAM_STR);
        $query->bindValue(':id', $this->getId(), \PDO::PARAM_INT);
        $query->execute();
    }
    //...
    }
```
# mise en place de la méthode delete : DELETE
```php
    class Personne{

    //...
    public function delete(): void
    {
        $pdo = DB::connect();
        $sql = "DELETE FROM personne  WHERE id=:id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $this->getId(),\PDO::PARAM_INT);
        $query->execute();
    }
    //...
    }
```

# Testons
```php
require_once('./config/config.php');
require_once(VENDOR_ROOT.'/autoload.php');
use Classes\Personne;


$personne = new Personne('BOB','EPONGE');
$personne->save();

// dans un 2eme tps
$personne = new Personne('BOB','EPONGE',2);
$personne->update();

// dans un 3eme tps
$personne = new Personne('BOB','EPONGE',2);
$personne->delete();
```


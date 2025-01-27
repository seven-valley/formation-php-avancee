# 18 Mise en place des méthodes


# mise en place de la méthode save : INSERT
```php
<?php
    class Personne{

    //...
    public function findall():void{    
        $pdo = DB::connect();
        $sql = $pdo->query("SELECT * from personne");
        $personnes = $sql->fetchAll(PDO::FETCH_OBJ);
        return $personnes;
    }
    //...
    }
```

# je teste
```php
<?php	
require_once('./config/config.php');
require_once(VENDOR_ROOT.'/autoload.php');

use Classes\Personne;
$personne = new Personne();
$personnes = $personne->findall();
var_dump($personnes);
```



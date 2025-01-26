

```php
spl_autoload_register(function ($class_name) {
    include_once './classes/'.$class_name . '.php';
});

$personne = new Personne('John','DOE');
var_dump($personne);
```


- php ini
pourquoi ?
- injection de depndance
- static
- créer le crud
- après créer
3 - Utiliser PHP en mode interactif ?? c'est quoi ?
-pdo
- les classes
-le singleton
- installer des dependances
- pdo ?
- twig


```
|-- projets-node
    |-- config
        |-- config.php
    |-- classes
        |-- Personne.php
    |-- composer.json
```

création du fichier <code>Personne.php</code>
```php
<?php
namespace Classes;
class Personne{
    private String $nom;
    private String $prenom;
    public function __construct(String $nom,String $prenom){
            $this->nom=$nom;
            $this->prenom=$prenom;
    }
}
```
création du fichier <code>composer.json</code>

```json
{
    "autoload":{
        "psr-4":{
            "Classes\\":"classes/"
        }
    }
}
```

```
composer dump-autoload
```

test.php
```php
require_once('./config/config.php');
require_once(VENDOR_ROOT.'vendor/autoload.php');

use Classes\Personne;

$personne = new Personne('John','DOE');
```


# 04 - Ma première classe

Présentation de UMLET

diagramme uml de personne

<code>+</code> public  
<code>-</code> public  
<code>#</code> protected  

le contructuer :
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


avec <code>?</code>
```php
<?php
namespace Classes;

class Personne{
    private ?String $nom =null;
    private ?String $prenom=null;
    
    public function __construct(?String $nom,?String $prenom){
            $this->nom=$nom;
            $this->prenom=$prenom;
    }
    public function getNom ():?String{
        return $this->nom;
    }    
    public function setNom (String $nom):void{
        $this->nom=$nom;
    } 
        public function getPrenom ():?String{
        return $this->prenom;
    }    
    public function setPrenom (String $prenom):void{
        $this->prenom=$prenom;
    } 
}


```

Ajouts des methodes

```php
<?php
namespace Classes;

class Personne{
    private ?String $nom =null;
    private ?String $prenom=null;
    
    public function __construct(?String $nom,?String $prenom){
            $this->nom=$nom;
            $this->prenom=$prenom;
    }
    public function getNom ():?String{
        return $this->nom;
    }    
    public function setNom (String $nom):void{
        $this->nom=$nom;
    } 
        public function getPrenom ():?String{
        return $this->prenom;
    }    
    public function setPrenom (String $prenom):void{
        $this->prenom=$prenom;
    } 
    public function getFullname():String{
        return $this->prenom." ".$this->nom;
    }
}


```

Mise en place de plusieurs constructeurs
```php
public function __construct(?String $nom='',?String $prenom=''){
            $this->nom=$nom;
            $this->prenom=$prenom;
    }
```

**Je teste**
```php
<?php	
require_once('./config/config.php');
var_dump(VENDOR_ROOT);
require_once(VENDOR_ROOT.'/autoload.php');

use Classes\Personne;
 $personne = new Personne('DOE','John');
 var_dump($personne);
 $personne = new Personne('DOE 2');
```
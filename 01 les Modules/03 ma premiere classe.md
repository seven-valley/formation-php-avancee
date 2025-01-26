# ma prmière classe
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

Mise en place de plusieurs constructeurs
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
    public function getNom ():?Float{
        return $this->nom;
    }    
    public function setNom (Float $nom):void{
        $this->nom=$nom;
    } 
        public function getPrenom ():?Float{
        return $this->prenom;
    }    
    public function setPrenom (Float $prenom):void{
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
    public function getNom ():?Float{
        return $this->nom;
    }    
    public function setNom (Float $nom):void{
        $this->nom=$nom;
    } 
        public function getPrenom ():?Float{
        return $this->prenom;
    }    
    public function setPrenom (Float $prenom):void{
        $this->prenom=$prenom;
    } 
    public function getFullname():String{
        return $this->prenom." ".$this->nom;
    }
}


```

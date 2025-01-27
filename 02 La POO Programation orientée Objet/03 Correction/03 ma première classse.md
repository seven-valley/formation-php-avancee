# Ma première classe

Création de la classe <code>Rectangle</code>
- Création des attributs en <code>private</code>
- Création du constructeur
```php
<?php
namespace Classes;

    private ?Float $x = null;
    private ?Float $y = null;
    private ?Float $longueur = null;
    private ?Float $largeur = null;

    public function __construct(?Float $x,?Float $y,?Float $longueur,?Float $largeur){
            $this->x=$x;
            $this->y=$y;
            $this->longueur=$longueur;
            $this->largeur=$largeur;
    }

```

Création des getteur et setteur
- Création des méthodes


```php

```
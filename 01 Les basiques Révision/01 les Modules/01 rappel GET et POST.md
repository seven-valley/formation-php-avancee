# Rappel des bases


## La Méthode GET
<img src="../img/module-1/03-get.png" width="400">


### Utiliser La méthode GET pour envoyer des données
***page-a.php***
```html
<a href="page-b.php?nom=PITT&prenom=Brad&age=42" > lien </a>
```

***page-b.php***
```php
<?php
if (isset($_GET['nom'])){
    $nom =$_GET['nom'];
    echo $nom."<br>";
}
if (isset($_GET['prenom'])){
    $prenom =$_GET['prenom'];
    echo $prenom."<br>";
}
if (isset($_GET['age'])){
    $age =$_GET['age'];
    echo $age."<br>";
}
```

pour debuger ;
***page-b.php***
```php
<?php
var_dump($_GET)
```

pour debuger ;
***page-b.php***
```php
<?php
print_r($_GET);
```

## La Méthode POST
<img src="../img/module-1/04-post.png" width="400">


### Utiliser POST pour envoyer des données
***page-a.php***
```html
<form method="post" action="page-b.php">
    <input name="prenom"><br>
    <input name="nom"><br>
    <input name="age"><br>
     <button type="submit">GO</button>
</form>
```

***page-b.php***
```php
<?php
if (isset($_POST['nom'])){
    $nom =$_POST['nom'];
    echo $nom."<br>";
}
if (isset($_POST['prenom'])){
    $prenom =$_POST['prenom'];
    echo $prenom."<br>";
}
if (isset($_POST['age'])){
    $age =$_POST['age'];
    echo $age."<br>";
}
```

pour debuger ;
***page-b.php***
```php
<?php
var_dump($_POST)
```

pour debuger ;
***page-b.php***
```php
<?php
print_r($_POST);
```

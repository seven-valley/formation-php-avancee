# 17 Un peu de rangement

Nous allons créer la classe <code>DB.php</code>
La classe <code>DB</code> est abstraite car nous allons l'utilsée sans l'instancier
La méthode <code>connect</code> est aussi abstraite

```php
<?php
namespace Classes;
abstract class DB{    
    public static function connect(){
       try{   
        $db = new \PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS);
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $db;
       }catch(\Exception $e){
        die('Erreur : ' . $e->getMessage());
       }
    }
}
```
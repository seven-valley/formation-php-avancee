<?php	
require_once('./config/config.php');
var_dump(VENDOR_ROOT);
require_once(VENDOR_ROOT.'/autoload.php');

use Classes\Personne;
$personne = new Personne('John','DOE');
var_dump($personne);


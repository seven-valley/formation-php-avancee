# mise en place de PDO


PDO versus Mysqli

Binder les requete
injection dependance


PDO est acronyme PHP Data Object

PDO est objet qui permet de d'interagir avec plusieur sba se de données
MYql sql Lise et post gre

Query select -> pdo statement

Prepare => excute > INSERT UPDATE DELETE

## le CRUD ?


# Création de la table personne
3 possiblités :

:one: Ecrire le code SQL
```sql
CREATE DATABASE IF NOT EXISTS videotheque CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE videotheque;

CREATE TABLE personne (
  id int NOT NULL AUTO_INCREMENT,
  prenom varchar(50) NOT NULL,
  nom varchar(50) NOT NULL,
  CONSTRAINT pk_personne PRIMARY KEY (id)
) ENGINE=InnoDB;
```
:two: Utiliser phpMyAdmin

:three: Utiliser de DBDiagramme
https://dbdiagram.io/  
prompt :  
```
Table "personne" {
  "id" int [pk, not null, increment]
  "prenom" varchar(50) [not null]
  "nom" varchar(50) [not null]
}
```
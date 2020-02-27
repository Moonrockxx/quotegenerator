<?php

ini_set('display_errors', 'On');
error_reporting(-1);

  $host_name = 'db5000270218.hosting-data.io';
  $database = 'dbs263761';
  $user_name = 'dbu40481';
  $password = 'Latokliten1.';
  

  try {
          $bdd = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
      } catch (PDOException $e) {
          echo "Erreur!: " . $e->getMessage() . "<br/>";
          die();
      }



    $req = $bdd->query("SELECT * FROM citations ORDER BY rand() LIMIT 1");
    
    while ($donnees = $req->fetch()){
    ?>
    
    <p>
    <strong>Auteur :</strong> <?php echo $donnees['autor']; ?><br />
    <br />
    <strong>Citation :</strong> <?php echo $donnees['quote']; ?>
    </p>
    
    <?php
    }

    $req->closeCursor();





?>

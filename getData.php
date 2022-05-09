<?php
require('database.php');


function getData(){
    $query = 'SELECT * FROM Personne 
        WHERE IDNumber = :cin ';
    $statement = $db->prepare($query);
    $statement->bindValue(':cin', $IDNumber);

    $statement->execute();
    $results = $statement->fetchAll(); 
    $statement->closeCursor();

    return $results;
};
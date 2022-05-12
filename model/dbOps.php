<?php

// function getData(){
//     global $db;
    
//     $query = 'SELECT * FROM Personne 
//         WHERE IDNumber = :cin ';
//     $statement = $db->prepare($query);
//     $statement->bindValue(':cin', $IDNumber);

//     $statement->execute();
//     $results = $statement->fetchAll(); 
//     $statement->closeCursor();

//     return $results;
// };

// function setData() {
//     global $db;

//     // Insert data into table Personne
//     $query1= " INSERT INTO Personne (firstname , lastname, dofBirth, IDNumber)
//                     VALUES (:firstname, :lastname, :dofbirth, :IDNumber)";
//     $statement1 = $db->prepare($query1);
//     $statement1->bindValue(':firstname', $firstname);
//     $statement1->bindValue(':lastname', $lastname);
//     $statement1->bindValue(':dofbirth', $dofBirth);
//     $statement1->bindValue(':ID', $IDnumber);

//     $statement1->execute();
//     $statement1->closeCursor();


//     // Insert data into table Logement.
//     $query2 = "INSERT INTO Logement (Adresse, Lieu, Region, Arrondissement )
//                     VALUES (:adresse, :lieu, :region, :arrodissement)";
//     $statement2 = $db->prepare($query2);
//     $statement2->bindValue(':adresse', $adresse);
//     $statement2->bindValue(':lieu', $lieu);
//     $statement2->bindValue(':region', $region);
//     $statement2->bindValue(':arrodissement', $arrodissement);

//     $statement2->execute();
//     $statement2->closeCursor();


//     // Insert data into table Parents.
//     $query3 = "INSERT INTO Parents (prenomPere, nomPere, prenomMere, nomMere)
//                     VALUES (:prenompere, :nompere, :prenommere, :nommere)";
//     $statement3 = $db->prepare($query3);
//     $statement3->bindValue(':prenompere', $prenomPere);
//     $statement3->bindValue(':nompere', $nomPere);
//     $statement3->bindValue(':prenommere', $prenomMere);
//     $statement3->bindValue(':nommere', $nomMere);

//     $statement3->execute();
//     $statement3->closeCursor();
// };
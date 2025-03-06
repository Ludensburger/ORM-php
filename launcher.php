<?php

require_once 'init2.php';

$db = new DBORM('mysql:host=localhost;dbname=usjr','root','root');


// $result = $db->table('students')->insert(['124','Gudio','Camocamo','Jeoffrey','BSIT',4,'SCS']);  // sample insertion
// $result = $db->table('students')->insert(['124','Jeoffrey','Camocamo','Gudio','BSIT', 'SCS', 4]);  // sample insertion
// echo $db->showQuery();

// $result = $db->table('students')->insert(['1', 'Jeoffrey', 'Camocamo', 'Gudio', 5002, 5, 4]);  // sample insertion
// echo $db->showQuery();



 $result = $db->select()->from('students')->getAll(); // Get all rows from a table
 echo $db->showQuery();


 var_dump($result);

// $result = $db->select()->from('students')->where('studcollid','SCS')->getAll(); // Get all rows from a table matching a criteria
// echo $db->showQuery();

// $result = $db->select()->from('students')->where('studfirstname','Roderick')->get(); // Get a single row fron a table that matches the criteria
// echo $db->showQuery();

// $result = $db->table('students')->where('studlastname','Gudio')->update(['studlastname'=>'Godio']); // sample update
// echo $db->showQuery();

// $result = $db->table('students')->where('studlastname','Godio')->delete(); // sample delete
// echo $db->showQuery();
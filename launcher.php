<?php

require_once 'init2.php';

// Ryu PC
$db = new DBORM('mysql:host=localhost;dbname=usjr','root','');

// Lab PC
// $db = new DBORM('mysql:host=localhost;dbname=usjr','root','root');

// default
// $result = $db->table('students')->insert(['124','Gudio','Camocamo','Jeoffrey','BSIT',4,'SCS']);  // sample insertion
// echo $db->showQuery();

// default
// $result = $db->select()->from('students')->getAll(); // Get all rows from a table
// echo $db->showQuery();

// default
// $result = $db->select()->from('students')->where('studcollid','SCS')->getAll(); // Get all rows from a table matching a criteria
// echo $db->showQuery();

// default
// $result = $db->select()->from('students')->where('studfirstname','Roderick')->get(); // Get a single row fron a table that matches the criteria
// echo $db->showQuery();

// default
// $result = $db->table('students')->where('studlastname','Gudio')->update(['studlastname'=>'Godio']); // sample update
// echo $db->showQuery();

// default
// $result = $db->table('students')->where('studlastname','Godio')->delete(); // sample delete
// echo $db->showQuery();

// $result = $db->table('students')->insert(['1', 'Jeoffrey', 'Camocamo', 'Gudio', 5002, 5, 4]);  // sample insertion
// echo $db->showQuery();


// Adjusted

// $result = $db->table('students')->insert([1, 'Jeoffrey', 'Camocamo', 'Gudio', 5002, 5, 4]);
// echo $db->showQuery();
// echo "<br>";

// $result = $db->select()->from('students')->getAll();
// echo $db->showQuery();
// echo "<br>";

// $result = $db->select()->from('students')->where('studcollid', 5)->getAll();
// echo $db->showQuery();
// echo "<br>";

// $result = $db->select()->from('students')->where('studfirstname', 'Jeoffrey')->get();
// echo $db->showQuery();
// echo "<br>";
// print_r($db->showValueBag());

// $result = $db->table('students')->where('studlastname', 'Camocamo')->update(['studlastname' => 'Camuccamo']);
// echo $db->showQuery();
// echo "<br>";

// $result = $db->table('students')->where('studid', 124)->delete();
// echo $db->showQuery();
// echo "<br>";

// var_dump($result);


// Insert a student record
// $result = $db->table('students')->insert([2, 'Percy', 'Z', 'Valencia', 5001, 5, 4]);
// echo "Insert Query: " . $db->showQuery();
// echo "<br>";
// echo "Rows affected: " . $result;
// echo "<br>";

// Retrieve all records from the students table
$result = $db->select()->from('students')->getAll();
echo "Select Query: " . $db->showQuery();
echo "<br>";
echo "<pre>";
print_r($result);
echo "</pre>";
echo "<br>";

// Alternatively, using JSON_PRETTY_PRINT for better formatting
echo "Formatted Output:<br>";
echo "<pre>";
echo json_encode($result, JSON_PRETTY_PRINT);
echo "</pre>";
echo "<br>";
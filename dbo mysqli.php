<?php

//connect dbo to mysql
     try {

     $dbo = new PDO('mysql:host=localhost;database', 'root', '');

     foreach ($dbo->query('SELECT * from friends') as $row)
 {
      print_r ($row);
 }
     $dbo = null;

}   catch (PDOException $dbo)

{

 //print out the result;
     echo  "Error!: " . $dbo->getMessage(); 
     echo "<br/>";
      die();
}
?>

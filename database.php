<?php
require 'database.php';
// Make a MySQL Connection
$db = mysql_connect("localhost", "root", "") or die(mysql_error());
//mysql_select_db("test") or die(mysql_error());?>

<?php
mysql_select_db('database');
$result = mysql_query("SELECT * FROM akirachix", $db);

//$result = mysql_fetch_array($friends);
// Print out the contents of the entry 
//print_r($result);exit();
while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
  echo "firstname: ".$row['firstname'].'<br>';
echo " age: ".$row['age'].'<br>';
echo "phone:".$row['phone'].'<br>';
}
exit();
// Insert a row of information into the table akirachix
mysql_db_query('database',"INSERT INTO akirachix
(firstname, age,phone) VALUES('philip ', '20', '0723280083' ) ") 
or die(mysql_error());  

mysql_query("INSERT INTO akirachix 
(firstname, age,phone) VALUES('philgon', '19', 0712289096 ) ") 
or die(mysql_error());  

mysql_query("INSERT INTO akirachix 
(firstname, age, phone) VALUES('mwangi', '21', '0755882538' ) ") 
or die(mysql_error());  


mysql_query("INSERT INTO akirachix 
(firstname, age,phone) VALUES('munyiva', '19', '0714655959' ) ") 
or die(mysql_error());

mysql_query("INSERT INTO akirachix 
(firstname, age,phone) VALUES('maxwel', '23', '0713856990' ) ") 
or die(mysql_error());

 mysql_query("INSERT INTO akirachix 
(firstname, age,phone) VALUES('mike', '17', '0710082855' ) ") 
or die(mysql_error()); 

?>

<?php


// Retrieve all the data from the "akirachix" table
$friends = mysql_query("SELECT * FROM akirachix")
or die(mysql_error());  

// store the record of the "akirachix" table into $row
$result = mysql_fetch_array( $friends );
// Print out the contents of the entry 

foreach($result as $row){
  echo "firstname: ".$row['firstname'];
echo " age: ".$row['age'];
echo "phone:".$row['phone'];
}
?> 

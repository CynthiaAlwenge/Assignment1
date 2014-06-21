<?php
class Student2{
	protected $firstName;
	protected $lastName;
	
	public function __construct($firstName, $lastName){
			$this->setFirstName($firstName)
			->setLastName($lastName);
}
     public function setFirstName($firstName)
{
	      $this->firstName = $firstName;
	     return $this;
}
     public function getFirstName()
{
	     return $this->firstName;
}
     public function setLastName($lastName)
{
	      $this->lastName = $lastName;
		 return $this;

}
     public function getLastName(){
	     return $this->lastName;
}
     public function getFullName()
{

	     return strrev($this ->firstName . ' ' . $this->lastName);

}
}

   $ladyStudent = new Student2('Mary', 'Marava');
      echo $ladyStudent->getFullName();
      echo "<br>";

// replace the original string

     $originalString = "Mary Marava.";



     $newString = str_replace("a","-",$originalString);
     
// print out the newstring
      echo $originalString."<br/>";
      echo $newString
?>

<?php
// create a class
class Student
{
	     protected $firstName;
	     protected $lastName;
	      protected $age;

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
     public function getLastName()
{
	         return $this->lastName;
}

     public function getFullName()
{
	         return $this ->firstName . ' ' . $this->lastName;
}
}


//print out the result;
 $studentOne = new Student();
 echo $studentOne->setFirstName('Joan')
				->setLastName('Mwangi')
				->getFullName();


?>

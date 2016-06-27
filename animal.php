<?php

	class Animal {

		public $name;
 		public $health;

 		
  public function __construct() 
  {
    echo "I am alive";
    $this->health = 100;
  }

  public function __get($property)
  {
    if (property_exists($this, $property))
    {
      return $this->property;
    }
  }

  public function __set($property, $value) 
  {
    if (property_exists($this, $property)) 
    {
      $this->$property = $value;
    }
    return $this;
  }


	}


?>
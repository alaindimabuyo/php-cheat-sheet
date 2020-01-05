<?php

    class Person{
        private $name;
        private $email;
        private static $ageLimit = 40;
        //Create a Constructor
        public function __construct($name, $email){
             $this->name = $name;
             $this->email = $email;

             echo  __CLASS__ . 'Created';
        }
        //Deconstruct
        public function __destruct(){
            echo  __CLASS__ . 'Created';
       }
        //Getter and Setter
        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setEmail($name){
            $this->name = $name;
        }

        public function getEmail(){
            return $this->name;
        }

        public static function getAgeLimit(){
            return self::$ageLimit;
        }
    }

    echo Person::getAgeLimit();
    // $person1 = new Person('Aali', 'test@gmail.com');
    // echo $person1->getName();

    // $person1->setName('Alain Pogi');
    // echo $person1->getName();
   
   
   
  //INHERITANCE
  class Customer extends Person{
      private $balance;

      //Create a constuctor 
      public function __construct($name, $email, $balance){
          parent::__construct($name, $email, $balance);
          $this->balance = $balance;
          echo 'A new' . __CLASS__ . 'has been created';
      }
      public function setBalance($balance){
          $this->balance = $balance;
      }

      public function getBalance(){
          return $this->balance. '<br>';
      }
  }

  $customer1 = new Customer('Andrew', 'testandrew@test.com', 100);

  echo $customer1->getBalance();
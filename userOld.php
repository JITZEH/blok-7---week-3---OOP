<?php
abstract class User {
    private $_username;

      public function __construct($name) {
        $this->_username = $name;
    }

    public function getUsername() {
        return $this->_username;
    }
    
    public abstract function getUserStatus();
}

class Customer extends User {
    private $_customerId;
  
    
    public function __construct($username, $id, $firstname) {
        $this->_username = $username;
        $this->_customerId = $id;
        $this->firstname = $firstname;
    }
    public function getUserName() {
        return $this->_username;
    }
    public function getUserStatus() {
        return 'customer';
    }
}

class Employee extends User {
    private $_employeeId;
    
    public function __construct($username, $id) {
        $this->_username = $username;
        $this->_employeeId = $id;
    }
    
    public function getUserStatus() {
        return 'employee';
    }
}

$jan = new Customer('janB', 1, 'jan');
$inge = new Employee('inge', 1);
echo $jan->getUserName() . 'lol';
echo 'Jan is een '.$jan->getUserStatus().'. <br />';
echo 'Inge is een '.$inge->getUserStatus().'.';
?>
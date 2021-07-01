<?php
class User {
    public $username;
    public $firstname;
    public $middlename;
    public $lastname;

        function __construct($username, $firstname, $middlename, $lastname) {
            $this->username = $username;
            $this->firstname = $firstname;
            $this->middlename = $middlename;
            $this->lastname = $lastname;  
        }
        function getUsername() {
            return $this->username;
        }
        function getFirstName() {
            return $this->firstname;
        }
        function getMiddleName() {
            return $this->middlename;
        }
        function getLastName() {
            return $this->lastname;
        }


}

class Normal_User extends User {
    function getRights() {
        return 'normal';
    }
}

class Premium_User extends User {
    function getRights() {
        return 'premium';
    }
}

class Admin extends User {
    function getRights() {
        return 'admin';
    }
}

/* users */
$jitze = new User('JvdHoek', 'Jitze', 'van der', 'Hoek');
/* users */

echo 'username:' . '&nbsp;' . $jitze->getUserName();
echo '<br/>';
echo 'firstname:' . '&nbsp;' . $jitze->getFirstName();
echo '<br/>';
echo 'middlename:' . '&nbsp;' . $jitze->getMiddleName();
echo '<br/>';
echo 'lastname:' . '&nbsp;' . $jitze->getLastName();



<?php
declare(strict_types=1);
namespace html;

abstract class User
{
    /**
     * @var string
     */
    private $username;
    /**
     * @var string
     */
    private $firstname;
    /**
     * @var string|null
     */
    private $middlename;
    /**
     * @var string
     */
    private $lastname;

    /**
     * @var int
     */
    private $age;

    public function __construct(string $username, string $firstname, ?string $middlename, string $lastname, int $age) {
        $this->username = $username;
        $this->firstname = $firstname;
        $this->middlename = $middlename;
        $this->lastname = $lastname;
        $this->age = $age;
    }

    public function getUsername(): string {
        return $this->username;
    }

    public function getFirstName(): string {
        return $this->firstname;
    }

    public function getMiddleName(): ?string {
        return $this->middlename;
    }

    public function getLastName(): string {
        return $this->lastname;
    }

    public function getAge(): int {
        return $this->age;
    }


    abstract function getRights(): string;
}

class NormalUser extends User {
    public function getRights(): string {
        return 'normal';
    }
}

class PremiumUser extends User {
    public function getRights(): string {
        return 'premium';
    }
}

class Admin extends User {
    public function getRights(): string {
        return 'admin';
    }
}

// users
$jitze = new Admin('JvdHoek', 'Jitze', 'van der', 'Hoek', 17);
$niels = new NormalUser('nvdbeek', 'Niels', 'van der', 'Beek', 30);
$gerben = new PremiumUser('ghoek', 'Gerben', null, 'Hoek', 15);
// users

/** @var User[] $array */
$array = [
    $jitze,
    $niels,
    $gerben
];

foreach ($array as $user) {
    printf('Gebruikersnaam: %s', $user->getUsername());
    print_r('<br/>');
    printf('Voornaam: %s', $user->getFirstName());
    print_r('<br/>');
    printf('Tussenvoegsel: %s', $user->getMiddleName() ?? '');
    print_r('<br/>');
    printf('Achternaam: %s', $user->getLastName());
    print_r('<br/>');
    printf('leeftijd: %s', $user->getAge());
    print_r('<br/>');
    printf('Rechten: %s', $user->getRights());
    print_r('<br/><br/><hr/><br/>');
}
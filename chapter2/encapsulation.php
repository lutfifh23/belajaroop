<?php

class User {
    public $firstname;
    public $lastname;
    public $username;

    protected $regID = 1001;
    private $level = 'User';

    public function FullName(){
        return $this->firstname . ' ' . $this->lastname;
    }

    protected function sayProtected(){
        return "Hello, protected";
    }

    private function sayPrivate(){
        return "Hello, Private";
    }

    public function sayMe(){
        return $this->sayPrivate();
    }
}

class Customer extends User {
    public function sayParent(){
        return $this->sayPrivate();
    }
}

$u = new User;
$u ->firstname = 'User';
$u ->lastname = 'Class';

// echo $u->regID(). "<br/>";
// echo $u->level(). "<br/>";

echo $u->FullName(). "<br/>";
echo $u->sayMe(). "<br/>";

$c = new Customer;
$c ->firstname = 'Customer';
$c ->lastname = 'Dapa';

echo $c->FullName(). "<br/>";
echo $c->sayParent(). "<br/>";
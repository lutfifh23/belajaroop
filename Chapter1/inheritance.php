<?php

class User {
    var $firstname;
    var $lastname;
    var $username;

    function FullName(){
        return $this->firstname . ' ' . $this->lastname;
    }
}

class Customer extends User {
}

$c = new Customer;
$c ->firstname = 'Customer';
$c ->lastname = 'Dapa';

echo $c->FullName(). "<br/>";

if (is_subclass_of($c, 'User')) {
    echo "merupakan subsclass dari class user <br/>";
}

$parents = class_parents($c);
echo implode(', ', $parents);
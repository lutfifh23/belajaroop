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
    var $city;
    var $country;

    function location(){
        return $this->city . ', ' . $this->country;
    }

    function FullName(){
        return $this->firstname . ' ' . $this->lastname . '(customer)';
    }
}
$u = new User;
$u ->firstname = 'Lutfi';
$u ->lastname = 'Dapa';
// $u ->city ='Tasik';
// $u ->country='Indonesia';

echo $u->FullName(). "<br/>";
// echo $u->location(). "<br/>";

$c = new Customer;
$c ->firstname = 'Customer';
$c ->lastname = 'Dapa';
$c ->city ='Tasik';
$c ->country='Indonesia';

echo $c->FullName(). "<br/>";
echo $c->location(). "<br/>";

if (is_subclass_of($c, 'User')) {
    echo "merupakan subsclass dari class user <br/>";
}

$parents = class_parents($c);
echo implode(', ', $parents);
<?php
class Student{
    var $firstName;
    var $lastName;

    var $country = 'none';

    function sayHello(){
        return 'Hello';
    }

    function fullname(){
        return $this->firstName . ' ' . $this->lastName;
    }
}
$student1 = new Student;

$student1 -> firstName = 'Lutfi';
$student1 -> lastName = 'Asep';

echo $student1 -> firstName . "<br />";
echo $student1 -> lastName . "<br />";

echo $student1 -> sayHello() . "<br />";
echo $student1 -> fullname() . "<br />";

$class_methods = get_class_methods('Student');
echo "Method milik Student: ";
echo "<pre>";
print_r($class_methods);
echo "</pre>";

if (method_exists('Student', 'sayHello')) {
    echo "Method sayHello tersedia";
} else {
    echo "Method sayHello tidak tersedia";
}
?>
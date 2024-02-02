<?php
class Student{
    var $name;
    var $country = 'None';

    function sayHello(){
        return 'Hello';
    }
}
$student1 = new Student;
$student2 = new Student;

$student1 -> name = 'Lutfi';
$student2 -> name = 'asep';

echo $student1 -> name . "<br />";
echo $student2 -> name . "<br />";

echo $student1 -> sayHello() . "<br />";
echo $student2 -> sayHello() . "<br />";

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
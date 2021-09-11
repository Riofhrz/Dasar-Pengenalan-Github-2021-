<?php
$employee = [
    'name'=>'jhon',
    'email'=>'jhon@example.com',
    'phone'=>'1234567890',
];

//get the value of employee nmae
echo $employee['name'];

// get all value
foreach ($employee as $key=>$value) {
    echo $key . ':' . $value;
    echo "<br>";
}
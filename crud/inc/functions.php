<?php
function seed($filename){
  
$data = array(
    array(
        'fanme' => 'Kamal',
        'lname' => 'Ahmed',
        'roll' => '11'
   ),array(
       'fanme' => 'Jamal',
       'lname' => 'Ahmed',
       'roll' => '12'
   ),array(
    'fanme' => 'Ripon',
    'lname' => 'Ahmed',
    'roll' => '9'
),array(
    'fanme' => 'Nikhil',
    'lname' => 'Chandra',
    'roll' => '8'
),array(
    'fanme' => 'John',
    'lname' => 'Rozario',
    'roll' => '7'
)
    );
    $serializedData = serialize($data);
    file_put_contents($filename,$serializedData,LOCK_EX);
}

?>
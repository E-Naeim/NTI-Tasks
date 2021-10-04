<?php
/* Part1 */
$input = 'a';
$output = ++$input; 

// To return after reaching 'Z'
if (strlen($output) > 1) 
{
 $output = $output[0];
 };


echo 'Output is: '.$output."\n";

//////////////////////////////////////

/* Part2 */
$students = [
    ['name' => 'Root','age' => 20] , 
    ['name' => 'Root2','age' => 25,'gpa' => 3.4] ,
    ['name' => 'Root3','age' => 30]
];

foreach ($students as $key => $value) {
    foreach ($value as $k => $v) {
        echo $k; // Get index.
        echo $v.'<br>';// Get value.
    }
}

?>

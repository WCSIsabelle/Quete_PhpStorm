<?php
$students = array(
    'Emmanuel' => 42,
    'Thierry' => 51,
    'Pascal' => 45,
    'Eric' => 48,
    'Nicolas' => 19,
);

foreach ($students as $nom => $age) {
    echo $nom." a ".$age." ans"."\n";
}

echo 'La moyenne des âges des étudiants est de '.$result = array_sum($students) / count($students).'ans!';

?>
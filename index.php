<?php

require 'src/TimeTravel.php';

$start = new DateTime('1985-12-31');
$end = new DateTime('1987-12-30');

$intervalSeconds = new DateInterval('PT1000000000S');

$intervalStep = new DateInterval('P1M1W1D');

$step = new DatePeriod($start, $intervalStep ,$end);

$travel = new TimeTravel($start, $end);

echo $travel->getTravelInfo() . '<br>';
echo '<br>';

echo 'La DeLorean doit être réglée au ' . $travel->findDate($intervalSeconds) . '<br>';
echo '<br>';

foreach($travel->backToFutureStepByStep($step) as $date) {
    echo $date . '<br>';
}

<?php
// find 10 armstrong numbers

$count = 0; 
$digitCount = 0;
$sum = 0;
$lb = 1;
$ub = 10000;

$armstrongArray = array();

for ($i = $lb; $i <= $ub; $i++)
{
    if ($count == 10)
        break;

    $n = $i;

    while ($n != 0)
    {
        $n = round($n / 10);
        ++$digitCount;
    }

    $n = $i;

    while ($n != 0)
    {
        $rem = $n % 10;
        $sum = $sum + $rem**$digitCount;
        $n = $n / 10;
    }

    if ($sum == $i)
    {
        $count++;
        $armstrongArray[$count] = $i;
        // $armstrongArray[] = $i;
    }

    $sum = 0;
    $digitCount = 0;
}

print_r($armstrongArray);
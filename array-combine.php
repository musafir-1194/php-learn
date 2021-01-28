<?php
// How would you write your own array_combine function?
$keys = array(
    1,
    2,
    3,
    4,
    5,
    6
);

$values = array(
    'anukriti',
    'ashish',
    'pratiksha',
    'himanshu',
    'neha',
    'sagar',
);

// $values = '';

function array_combine_custom($keys, $values)
{
    if (!is_array($keys) || !is_array($values))
        return 'Please pass arrays only.' . "\n";

    if ( count($keys) != count($values) )
        return "Arrays do not contain same number of elements. \n";

    for($i = 0; $i < count($keys); $i++)
    {

        for($j = $i; $j <= $i; $j++)
        {
            $new_combine_array[$keys[$i]] = $values[$j];
        }
    }

    return $new_combine_array;
}

$arr = array_combine_custom($keys, $values);
print_r($arr);
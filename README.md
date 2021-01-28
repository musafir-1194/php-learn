# PHP Learn

## Custom array_combine() function in php
I have created a custom function which takes two arrays, and combine them with first's keys and second array as values.

Ex. 

$keys = array(
    1,
    2,
    3,
    4,
    5,
    6
);

$values = array(
    'One',
    'Two',
    'Three',
    'Four',
    'Five',
    'Six',
);

Will give me the result as follow :

Array
(
    [1] => One
    [2] => Two
    [3] => Three
    [4] => Four
    [5] => Five
    [6] => Six
)

<?php
declare(strict_types=1);

$array = [1,3,234,54,5,'1',232,1,1,87,null,3,5,1,7,1,];

function search1(array $array): int {
    if (count($array) < 1) {
        print_r('Size array < 1');
        return 0;
    }
    foreach ($array as $numbers) {
        if ($numbers === 1) {
            $result = $result + 1;
        }
    }
    print_r($result);
    return $result;
}
search1($array);
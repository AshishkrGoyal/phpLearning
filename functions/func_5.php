<?php
/**
 * Created by PhpStorm.
 * User: Ashish Goyal
 * Date: 8/17/2017
 * Time: 7:09 AM
 */

//understanding of php variable functions
//it is very useful for callbacks in php7
function h1()
{
    echo 'inside h1';
}

function h2(){
    echo 'inside h2';
}

$string = 'h1';
echo $string();

?>
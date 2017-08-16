<?php
/**
 * Created by PhpStorm.
 * User: Ashish Goyal
 * Date: 8/17/2017
 * Time: 1:49 AM
 */

$_num_1 = 1;
$_num_2 = 2;

$_str_1 = "1";

#echo $_num_1;
var_dump($_num_1);
var_dump($_str_1);

var_dump($_num_1 + $_num_2);

echo gettype($_num_2);

$_a = 15;
$_b = 2;

var_dump($_a + $_b); //int(17)
var_dump($_a - $_b); //int(13)
var_dump($_a * $_b); //int(30)
var_dump($_a / $_b); //float(7.5)
var_dump($_a % $_b); //int(1)

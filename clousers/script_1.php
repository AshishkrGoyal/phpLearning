<?php
/**
 * Created by PhpStorm.
 * User: Ashish Goyal
 * Date: 8/17/2017
 * Time: 7:20 AM
 */
$sur_name = "goyal";
function cl1()
{
    global $sur_name;

    $name="Ashishkr";
    echo $sur_name;
    $greet = function() use($name,$sur_name)
    {
        #global $sur_name;
        echo $sur_name;
        echo $name;
    };
    $greet();
}
cl1(); //goyalgoyalAshishkr


?>
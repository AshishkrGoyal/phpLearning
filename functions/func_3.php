<?php
/**
 * Created by PhpStorm.
 * User: Ashish Goyal
 * Date: 8/17/2017
 * Time: 6:19 AM
 */

//this file for understanding default arguments in php7;

function get_info($name, $time=null)
{
    if($time)
    {
        echo "time is given as $time";
    }
    else
    {
        echo "time is not given";
    }
    echo $name," ", "is as given and"," ", $time, " ","is as also printed";
}



function default_made($name="ashish",$time="Night")
{
    echo "$name, $time";
}
default_made();

get_info("Ashish Kumar Goyal", "afternoon");
get_info("Ashish Goyal");


?>
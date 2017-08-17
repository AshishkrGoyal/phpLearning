<?php
/**
 * Created by PhpStorm.
 * User: Ashish Goyal
 * Date: 8/17/2017
 * Time: 6:07 AM
 */


function func_3($checker){
    if(is_array($checker))
    {
        #echo "yes it is an array";
        foreach ($checker as $name)
        {
            echo $name;
        }
    }
    else
    {
        echo "No, it is not an array";
    }
}
func_3("Ashish");

echo "Now, it is second call";
$array = array(
    "@Ashishkrgoyal","RaghavGoyalAshish"
);


#$array = ["Ashishkr","RaghavGoyal"];

func_3($array);

?>
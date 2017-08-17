<?php
/**
 * Created by PhpStorm.
 * User: Ashish Goyal
 * Date: 8/17/2017
 * Time: 6:44 AM
 */


function func_5($Ashish=null)
{
    if($Ashish)
        return "you are Ashish Goyal";
    else
    {
        return "you are stranger for us";
    }

}
$catcher = func_5("Ashish");
echo $catcher;


#function for addition for two numbers

function addition($fir_dgt=0, $sec_dgt=0)
{
    $output = $fir_dgt + $sec_dgt;
    return $output;
}
$result = addition(4,5);
echo $result;

/*$output = addition();
echo $output;*/





//understanding function print_r in php7
function addition_sec($num_1=0, $num_2=0)
{
    $out = $num_1+$num_2;
    $array = array(
        $num_1,
        $num_2,
        $out
    );
    #return $out;
    return $array;
}
$storing_var = addition_sec(4,5);
#print_r($storing_var);
echo $storing_var[2];

?>
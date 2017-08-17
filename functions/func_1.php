<?php
/**
 * Created by PhpStorm.
 * User: Ashish Goyal
 * Date: 8/17/2017
 * Time: 5:50 AM
 */

function func_1()
{
    echo 'Ashish it is your first function for func_1';
}
#func_1();


//$_currUser="Ashishkr";
function validateUser($_currUser){
    //global $_currUser;
    if($_currUser == "Ashishkr")
    {
        echo "it is Ashishkr who is inside function validateUser";
    }
    else
    {
        echo "We don't know who is this inside function validateUser";
    }
}
validateUser("Ashishkr");

#func_1();
?>
<?php
/* 
    !Function Intro!
    Remove comment blocks
    to manipulate code. 

*/

/*
//Simple function
function hello(){
    echo 'Hello, World';
}
//Call function
hello();
*/

/*
//Conditional Function
$current_user = 'Mike';
function is_mike(){
    //Access variable without argument
    global $current_user;
    if($current_user == 'Mike'){
        echo 'It is Mike.';
    } else {
        echo 'It is not Mike.';
    }
}  

//Call function
is_mike();
*/
/*
//Create function with one argument
function hello($name){
    //Expand and echo $name variable 
    echo "Hello, $name, how's it going?";

}
//Call function and pass argument
hello('Hampton');
*/
/*
//Pass in multiple arguments with an array 
function hello($arr){
    if(is_array($arr)){
        foreach($arr as $name)
        {
        echo "Hell, $name, how's it goin! <br />";
        }
    }else{
        echo 'Hello, friends';
    }
}
//Creat Array
$names = array(
    'Hampton', 
    'Charlie',
    'Mike',
);

hello($names);
*/


?>
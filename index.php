<?php
/* !Function Intro! */

/*
//Simple function
function hello(){
    echo 'Hello, World';
}
//Call function
hello();
*/

//Condtional Function
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

?>
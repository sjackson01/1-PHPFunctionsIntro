# 1-PHPFunctionsIntro
TreeHouse Tutorial:  Exercises and examples associated with functions 
1 PHP Functions Intro Notes
1.Introduction to Functions: Functions are a way for us to organize and group statements of code.
  a.Example 1:  Coffee pot would be a function called make coffee. 
      It would take in coffee grounds and water and return a cup of liquid coffee. 
  b.Keyword Function: Signals the php interpreter that anything after this is going to be a function. 
      Also, we must call the function if we want to execute the code within the curly braces.
    i.	<?php
    function hello(){
    echo 'Hello, World';
    }
    //Call the Function
    hello();
    ?>
  c.Function Scope: Anything used within the function must be passed from the outside as an argument. 
    Unless we use the global keyword the define the variable inside of the function. 
  d.Conditional Function Example
    i.//Conditional Function
      $current_user = 'Mike';
      function is_mike(){
      //Access variable without argument
      global $current_user;
      if($current_user == 'Mike'){
        echo 'It is Mike.';
        } else {
        echo 'It is not Mike.';
      }
    }  

    //Call function
    is_mike();
2.	PHP Function Arguments: Information may be passed to functions through an argument list. 
    The argument list is a comma delimited list of expressions that are evaluated from the left most item to the right.
    Parameters within functions are simply place holders. They do not need to have the same name as the argument. 
  a.2 Methods of Passing Arguments
    i.Passing by Value: This is the default in php. The arguments value is not affected by the function.
      1.//Pass in multiple arguments with an array 
          function hello($arr){
           if(is_array($arr)){
          foreach($arr as $name)
          {
          echo "Hell, $name, how's it goin! <br />";
          }
          }else{
          echo 'Hello, friends';
         }
        }
         //Creat Array
         $names = array(
         'Hampton', 
         'Charlie',
         'Mike',
        );

        hello($names);
        ii.	Passing by Reference: The value of an argument if modified by the function scope will be modified on the 
        outside of that function scope as well.
3.PHP Function Default Arguments:  Sometimes if an argument is not passed through we will still want to have a default value. 
     a.Default Argument Example
      i.	/No title argument will default as 'friend'
          function get_info($name, $title = 'friend'){
          echo "$name has arrived, they are with us as a $title.";
        }

        get_info('Mike');
     b.Optional Argument Example
        i.	//Title argument is optional 
            function get_info($name, $title = null){
            //Checks $title anything other than null
            if($title){
            echo "$name has arrived, they are with us as a $title.";
            }else{
            echo "$name has arrived, welcome.";
            }
           }

          get_info('Mike', 'frog');

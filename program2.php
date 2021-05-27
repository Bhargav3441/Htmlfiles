<?php  
    
    echo"<h1> IF....ELSEIF...IF...ELSE...</h1>";
    $age=24;      
    if ($age>18){
        echo "You can drink water with chai and alcohol<br>";
    }
    
    else if($age>13){
        echo "You can drink chai only with water. No alcohol for you<br>";
    }
    else{
        echo "You can drink water only<br>";
    }
    
    
    echo" <br/><h1> NESTEDIF </h1>";
    $age = 23;  
    $nationality = "Indian";  
     
    if ($nationality == "Indian")  
    {  
        if ($age >= 18) {  
            echo "Eligible to give vote";  
        }  
        else {    
            echo "Not eligible to give vote";  
        }  
    }  
?>  
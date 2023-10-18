<?php 
   $globalVar = "i am global";

   function displayGlobal(){
    global $globalVar;
    echo "<p>globalVar</p>";

   }

   function modifyGlobal(){
    global $globalVar;
    $globalVar = "i am globally modified";
   }

   displayGlobal();
   modifyGlobal();
   displayGlobal();


   
?>
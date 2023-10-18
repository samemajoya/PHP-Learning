<?php 
function mysticCounter() {
   
    static $count = 0;
    $count++;
    echo "<p>Mystic power activated: $count</p>";
  }

  mysticCounter();
  mysticCounter();
  mysticCounter();

?>
<?php
  function timeCapsule() {
    $localVar = 1;
    static $staticVar = 1;

    echo "<p>Local Variable: $localVar</p>";
    echo "<p>Static Variable: $staticVar</p>";

    $localVar++;
    $staticVar++;
  }

  timeCapsule();
  timeCapsule();
  timeCapsule();
?>

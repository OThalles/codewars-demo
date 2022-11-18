<?php
function camel_case(string $s): string {
    $upperCase = ucwords($s);
    return str_replace(' ', '', $upperCase);
  }

?>
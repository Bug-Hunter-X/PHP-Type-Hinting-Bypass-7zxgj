<?php
function foo(int $a, int $b): int {
  //Validate input types
  if (!is_int($a) || !is_int($b)) {
    return 0; //Handle invalid input gracefully
  }
  return $a + $b;
}
?> 
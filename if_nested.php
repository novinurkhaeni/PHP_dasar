<?php
// kondisi if di dalam if
$a = 13;

if ($a > 10) {
  echo "$a diatas 10";
  if ($a > 20) {
    echo " dan juga diatas 20";
  } else {
    echo " tapi tidak diatas 20";
  }
}
?>
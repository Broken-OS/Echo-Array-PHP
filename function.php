<?php
function EchoArray($array) {
  if (empty($array)) {
    echo "";
  } else {
    $count = count($array);
    $count = $count - 1;
    foreach ($array as $echo) {
      if($echo == $array[$count]) {
        echo $echo, ".";
      } else {
        echo $echo, ", ";
      };
    };
  };
};
?>

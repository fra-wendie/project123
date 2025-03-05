<?php
$result = array();
for ($i=0; $i<5; $i++) {
    $result[] = rand(1, 10);
}
return implode(', ', $result);
?>
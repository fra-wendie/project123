<?php
// A simple function to generate a random number between 1 and 10
function getRandomNumber() {
    $random = rand(1, 10);
    echo $random;
}

// Call the function and print the result
getRandomNumber();
?>
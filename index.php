<?php

require 'vendor/autoload.php';
require 'src/DogCommand.php';


echo "Hi, here you can call shiba-inu, mops, taxa, labrador and rubber-taxa\n";
echo "They can sound and hunt\n";

$start = true;
while($start){

    echo "Please enter the dog type and command which the dog should do.\n";
    $input = fgets(STDIN, 1024);
    echo dogCommand($input);
    echo  "\n";

    echo "If you want to repeat enter yes.\n";
    $repeat = trim(fgets(STDIN, 1024));
    if($repeat==="yes"){
        $start=true;
    } else {
        $start=false;
        break;
    }
}

echo 'Thank you!';
<?php

function dogCommand($commandString) {   
    $input = explode(" ", trim($commandString));
    switch ($input[0]) {
        case "shiba-inu":
            if($input[1]==="sound"){
                return "woof! woof!";
            }elseif($input[1]==="hunt"){
                return "shiba-inu is hunting";
            }else{
                return;
            }
            break;
        case "mops":
            if($input[1]==="sound"){
                return "woof! woof!";
            }elseif($input[1]==="hunt"){
                return ;
            }else{
                return;
            }
            break;
        case "taxa":
            if($input[1]==="sound"){
                return "woof! woof!";
            }elseif($input[1]==="hunt"){
                return "taxa is hunting";
            }else{
                return;
            }
            break;
        case "labrador":
            if($input[1]==="sound"){
                return "woof! woof!";
            }elseif($input[1]==="hunt"){
                return "labrador is hunting";
            }else{
                return;
            }
            break;
        case "rubber-taxa":
            if($input[1]==="sound"){
                return ;
            }elseif($input[1]==="hunt"){
                return ;
            }else{
                return;
            }
            break;
    }
}
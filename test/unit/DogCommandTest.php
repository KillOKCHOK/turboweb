<?php

require 'src/DogCommand.php';

use PHPUnit\Framework\TestCase;

class DogCommandTest extends TestCase{

    public function testDogCommand():void {
        $result = dogCommand("mops hunt");
        $this -> assertEmpty($result);
        $result = dogCommand("taxa sound");
        $this -> assertEquals("woof! woof!", $result);
        $result = dogCommand("taxa hunt");
        $this -> assertEquals("taxa is hunting", $result);
        $result = dogCommand("retriver sound");
        $this -> assertEmpty($result);
    }

}
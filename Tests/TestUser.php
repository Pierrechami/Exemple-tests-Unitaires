<?php


use PHPUnit\Framework\TestCase;


class TestUser extends TestCase
{

 /** @test */ 
    public function TestValeurs (){
        $user1 = new User('pierre', 25); 

        $this->assertSame('pierre' , $this->name);
        $this->assertSame(25 , $this->age); 

    }

}
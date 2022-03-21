<?php

abstract class Client {
    abstract function woof();
    function fistingIsQuestionMark() { echo "Fisting is $300\r\n"; }
}

interface Human {
    function born();
    function die();
}

class User extends Client implements Human{
    public static int $userCount = 0;

    public readonly string $name;
    private int $age;


    public const pi = 3.14;

    function __construct(string $name) {
        $this->name = $name;
        $this->age=0;
        self::$userCount++;
        $this->born();

    }
    function __destruct(){
        $this->age=10000;
        $this->die(); 
    }
    
    public function woof(){
        echo "Donuts, the most famous baked good. They represent everything good & pure about this fine nation. but like most things, the Left is trying to ruin donuts by forcing their progressive values upon them. these days, donut shops are selling donuts with rainbow frosting, clearly in support of LGBT Pride. while there's nothing necessarily wrong with the LGBT Community, people should be allowed to buy donuts without having a left-wing, progressive agenda forced down their throat. the Left isn't just ruining donuts, over the years, more and more products have been sold in support of Gay Pride, from various other baked goods such as cake or cookies, to clothing, to even art. If you're still not convinced, on days after it rains, there's a rainbow in the sky, showing that the Left's influence is so strong, that even the Lord God himself has abandoned his Judeo-Christian values in favor of pandering to a Leftist Society. Things have gotten so bad, that when I use the mist setting on my garden hose, it too produces a rainbow. I haven't left my house in two weeks, and while my vegetable garden is slowly dying as we speak. It's better off my tomatoes quiver and die than succumb to the Leftist agenda. Now you may wonder why the Left wants to spread this agenda? Well it's because they're after this delicious boy pussy, but, they can't have it. I'm Dennis Prager.";
    }

    public function born(){
        echo "i want sandwich ({$this->name})\r\n";
    }
    public function die(){
        echo "i am ded\r\n";
    }
}

$tom = new User("Saddam Hussein");
$tom->fistingIsQuestionMark();

<?php

class Manager{
    var string $name;
     
    var string $title;
    public function __construct(string $name="", string $title="manager")
    {
        $this->name = $name;
        $this->title = $title;
    }
    function sayHello(string $name):void
    {
        echo "Hi $name, my name is Manager $this->name". PHP_EOL;
    }
}
class VicePrecident extends Manager{
    public function __construct(string $name=""){
        parent::__construct($name, "VP");//bagusnya memanggil construct yang dimiliki parent
    }
    function sayHello(string $name): void{
        echo "Hi $name, my name is VP  $this->name". PHP_EOL;

    }
}
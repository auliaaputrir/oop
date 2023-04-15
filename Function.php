<?php
    require_once "data/Person.php";
    $person = new Person();

    // $person-> sayHello("Aulia");
    $person->name = "Eko";
    $person->sayHello('Aulia');
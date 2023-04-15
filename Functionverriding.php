<?php

    require_once "data/Manager.php";
    $manager = new Manager();
    $manager->name = "Budi";
    $manager->sayHello("Joko");

    $vp = new VicePrecident();
    $vp->name ="Eko";
    $manager->sayHello("Joko");

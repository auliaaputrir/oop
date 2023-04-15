<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Eko");
var_dump($company);
$company->programmer = new BackendProgrammer("Eko");
var_dump($company);
$company->programmer = new FrontendProgrammer("Eko");
var_dump($company);

sayHello(new Programmer("Eko"));
sayHello(new BackendProgrammer("Eko"));
sayHello(new FrontendProgrammer("Eko"));
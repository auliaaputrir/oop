<?php

//cara mengakses constant
//contsant nempelnya kedalam class bukan kealam objek
//jadi untuk memanggil pake objeknya

require_once "data/Person.php";

//jadi cara aksesnnya gini
echo Person::AUTHOR . PHP_EOL;
//jadi gausah buat objek
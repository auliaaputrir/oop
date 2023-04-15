<?php
    class Person{
        //blok kode

        //constant
        const AUTHOR = "Programmer zaman now";

        
        var string $name;
        //cara memrikan nullable yaitu dengan menambahkan tanda tanya
        var ?string $address = null;
        // var string $address;
        var string $country = "Indonesia";


        function __construct(string $name, ?string $address){
            $this->name= $name;
            $this->address = $address;
        }
        // function sayHello(string $name){
        //     echo "Hello $name" . PHP_EOL;
        // }
        //mengakses objek saat ini
        function sayHello(?string $name){

            if(is_null($name))
            {
                echo "Hi, my name $this->name".PHP_EOL;
            }else{
                echo "Hi $name, my name $this->name".PHP_EOL;
            }
        }
        //self keyord
        //untuk memanggil di kelas yang sama 
        function info(){
            echo "Author : ".self::AUTHOR;
        }
        function __destruct(){
            echo "Object person $this->name is destroyed" . PHP_EOL;
        }
    }
?>
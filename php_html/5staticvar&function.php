<?php

function contoh(){echo 'Hello World!';}

contoh();

function plus() {
    $x = 50;
    $x++;
    echo $x . "<br>";
    }

plus();
plus();
plus();


function myTestplus() {
    static $x = 50;
    $x++;
    echo $x . "<br>";
}

function myTestmin() {
    static $x = 50;
    $x--;
    echo $x . "<br>";
}

function myTestplusten() {
    static $x = 50;
    $x+=10;
    echo $x . "<br>";
}

function myTestminten() {
    static $x = 50;
    $x-=10;
    echo $x . "<br>";
}


myTestplus();
myTestplus();
myTestplus();

myTestmin();
myTestmin();
myTestmin();

myTestplusten();
myTestplusten();
myTestplusten();

myTestminten();
myTestminten();
myTestminten();

?> 
<?php

class Programmer{

    public static function makeSystem(){
        echo "Start, Coding";
    }
}

class AmateurProgrammer extends Programmer{

    public static function makeSystem(){
        echo "Read Documentation <br/>";
        parent::makeSystem() . "<br/>";
        echo "Clean up mess <br/>";
    }
}

echo "Programmer: <br/>";
echo Programmer::makeSystem() . "<br/>";

echo "Amateur Programmer: <br/>";
echo AmateurProgrammer::makeSystem() . "<br/>";

class Image{
    public static $resizestatus = true;

    public static function geometry(){
        echo "760x300";
    }
}

class FotoProfile extends Image{
    public static function geometry(){
        if (self::$resizestatus) {
            echo "50x50";
        } else {
            parent::geometry();
        }
    }
}

echo Image::geometry() . "<br/>";
echo FotoProfile::geometry() . "<br/>";

echo Image::$resizestatus = false;
echo FotoProfile::geometry(). "<br/>";
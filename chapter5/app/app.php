<?php

namespace App;

include '../model/model.php';

use Model\Tabel as ModelTabel;

class Tabel{
    public static function get(){
        echo "App.Table.get() <br/>";
    }
}

Tabel::get();
ModelTabel::get();
?>
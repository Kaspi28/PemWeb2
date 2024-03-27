<?php
require_once ('OOP/Tugas3.php');

function getluas(){
    $persegipanjang = new persegipanjang(5,6);
    $luas = $persegipanjang->panjang * $persegipanjang->lebar;
    echo "Luas : " .$luas .PHP_OEL;
}

function getlebar(){
    $persegipanjang = new persegipanjang(5,6);
    $keliling = 2 *($persegipanjang->panjang + $persegipanjang->lebar);
    echo "Keliling : " .$keliling .PHP.OEL;
}

getLuas;
getKeliling;
?>
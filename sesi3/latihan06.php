<?php
    $mhs = array(
        array("Agus","20","Denpasar"),
        array("Anjas","21","Gianyar"),
        array("putra","22","Buleleng")
    );
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($mhs);
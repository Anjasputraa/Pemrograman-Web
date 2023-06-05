<?php
    // $dta["nama"] = "komang agus anjas putra";
    // $dta["alamat"] = "gianyar";
    // $dta["tgl_lahir"] = "2002-07-11";
    // $dta["email"] = "agusanjas11@gmail.com";
    // $dta["jurusan"] = "TI-MTI";
    // $dta["no_telp"] = "089111222333";

    $dta[0]["nama"]         = "Agus";
    $dta[0]["alamat"]       = "jl. cermai gianyar";
    $dta[0]["tgl_lahir"]    = "2002-07-11";
    $dta[0]["email"]        = "agusanjas11@gmail.com";
    $dta[0]["jurusan"]      = "manajemen data & informasi";
    $dta[0]["no_telp"]      = "089111222333";

    $dta[1]["nama"]         = "Anjas";
    $dta[1]["alamat"]       = "jl. sudirman denpasar";
    $dta[1]["tgl_lahir"]    = "1998-03-20";
    $dta[1]["email"]        = "anjas@gmail.com";
    $dta[1]["jurusan"]      = "sistem komputer";
    $dta[1]["no_telp"]      = "082334455";

    $dta[2]["nama"]         = "Putra";
    $dta[2]["alamat"]       = "jl. yehleh tabanan";
    $dta[2]["tgl_lahir"]    = "1994-04-07";
    $dta[2]["email"]        = "putra@gmail.com";
    $dta[2]["jurusan"]      = "desain komunikasi visual";
    $dta[2]["no_telp"]      = "081223344";


    // mendownload data json
    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($dta);
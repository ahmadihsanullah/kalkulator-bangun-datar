<?php
namespace src;

require_once "LingkaranClass.php";
require_once "BelahKetupatClass.php";
require_once "SegitigaClass.php";
require_once "JajarGenjangClass.php";
require_once "PersegiClass.php";
require_once "PersegiPanjangClass.php";
require_once "TrapesiumClass.php";

class BangunDatarFactory
{
    static function create($type): BangunDatarInterface
    {
        if ($type == "lingkaran") {
            return new LingkaranClass();
        } else if ($type == "persegi") {
            return new PersegiClass();
        } else if ($type == "persegi panjang") {
            return new PersegiPanjangClass();
        } else if ($type == "segitiga") {
            return new SegitigaClass();
        } else if ($type == "trapesium") {
            return new TrapesiumClass();
        } else if ($type == "belah ketupat") {
            return new BelahKetupatClass();
        } else if ($type == "jajar genjang") {
            return new JajarGenjangClass();
        }

    }
}
<?php
namespace src;

require_once "helper/helper.php";
require_once 'BangunDatarInterface.php';

class PersegiClass implements BangunDatarInterface
{
    private int | float $sisi;

    public function __construct()
    {
        $input = input("masukan sisi");
        $sisi = str_replace(",", ".", $input);
        $this->sisi = (float) $sisi;
    }

    public function luas(): string
    {
        $total = $this->sisi * $this->sisi;
        return "Luas Persegi = $total";
    }

    public function keliling(): string
    {
        $total = $this->sisi * 4;
        return "Keliling Persegi = $total";
    }

    public function result():void
    {
        echo "------------" . PHP_EOL;
        echo $this->luas() . PHP_EOL;
        echo $this->keliling() . PHP_EOL;
        echo "------------" . PHP_EOL;
    }
}
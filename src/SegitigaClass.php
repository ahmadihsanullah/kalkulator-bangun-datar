<?php
namespace src;

require_once "helper/helper.php";
require_once 'BangunDatarInterface.php';

class SegitigaClass implements BangunDatarInterface
{
    private int|float $alas, $tinggi, $sisi;

    public function __construct()
    {
        $input = input("masukan alas");
        $alas = str_replace(",", ".", $input);
        $this->alas = (float) $alas;

        $input = input("masukan tinggi");
        $tinggi = str_replace(",", ".", $input);
        $this->tinggi = (float) $tinggi;

        $input = input("masukan sisi");
        $sisi = str_replace(",", ".", $input);
        $this->sisi = (float) $sisi;
    }

    public function luas(): string
    {
        $total = 1 / 2 * $this->alas * $this->tinggi;
        return "Luas segitiga = $total";
    }

    public function keliling(): string
    {
        $total = $this->alas + ($this->sisi * 2);
        return "Keliling segitiga = $total";
    }

    public function result(): void
    {
        echo "------------" . PHP_EOL;
        echo $this->luas() . PHP_EOL;
        echo $this->keliling() . PHP_EOL;
        echo "------------" . PHP_EOL;
    }
}
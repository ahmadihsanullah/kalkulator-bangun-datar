<?php
namespace src;

require_once "helper/helper.php";
require_once 'BangunDatarInterface.php';

class JajarGenjangClass implements BangunDatarInterface
{
    private int|float $sisiMiring, $alas, $tinggi;

    public function __construct()
    {
        $input = input("masukan sisi miring");
        $sisiMiring = str_replace(",", ".", $input);
        $this->sisiMiring = (float) $sisiMiring;

        $input = input("masukan alas");
        $alas = str_replace(",", ".", $input);
        $this->alas = (float) $alas;

        $input = input("masukan tinggi");
        $tinggi = str_replace(",", ".", $input);
        $this->tinggi = (float) $tinggi;
    }

    public function luas(): string
    {
        $total = $this->alas * $this->tinggi;
        return "Luas jajar genjang = $total";
    }

    public function keliling(): string
    {
        $total = 2 * ($this->alas + $this->sisiMiring);
        return "Keliling jajar genjang = $total";
    }

    public function result(): void
    {
        echo "------------" . PHP_EOL;
        echo $this->luas() . PHP_EOL;
        echo $this->keliling() . PHP_EOL;
        echo "------------" . PHP_EOL;
    }
}
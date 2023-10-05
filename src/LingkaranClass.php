<?php
namespace src;

require_once "helper/helper.php";
require_once 'BangunDatarInterface.php';

class LingkaranClass implements BangunDatarInterface
{
    private float $phi = 3.14;
    private int|float $jariJari;

    public function __construct()
    {
        $input = input("masukan jari-jari ");
        $replace = str_replace(",", ".", $input);
        echo($replace . PHP_EOL);
        $this->jariJari = (float) $replace;
    }

    public function luas(): string
    {
        $total = $this->phi * $this->jariJari * $this->jariJari;
        return "Luas Lingkaran = $total ";
    }

    public function keliling(): string
    {
        $total = 2 * $this->phi * $this->jariJari;
        return "Keliling lingkaran = $total";
    }

    public function result(): void
    {
        echo "------------" . PHP_EOL;
        echo $this->luas() . PHP_EOL;
        echo $this->keliling() . PHP_EOL;
        echo "------------" . PHP_EOL;
    }
}
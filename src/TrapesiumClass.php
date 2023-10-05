<?php
namespace src;

require_once "helper/helper.php";
require_once 'BangunDatarInterface.php';

class TrapesiumClass implements BangunDatarInterface
{
    private int | float $atas, $bawah, $tinggi, $sisiMiringPertama, $sisiMiringKedua;

    public function __construct()
    {
        $input = input("masukan sisi atas");
        $atas = str_replace(",", ".", $input);
        $this->atas = (float) $atas;

        $input = input("masukan sisi bawah");
        $bawah = str_replace(",", ".", $input);
        $this->bawah = (float) $bawah;

        $input = input("masukan tinggi");
        $tinggi = str_replace(",", ".", $input);
        $this->tinggi = (float) $tinggi;

        $input = input("masukan sisi miring pertama");
        $sisiMiringPertama = str_replace(",", ".", $input);
        $this->sisiMiringPertama = (float) $sisiMiringPertama;

        $input = input("masukan sisi miring kedua");
        $sisiMiringKedua = str_replace(",", ".", $input);
        $this->sisiMiringKedua = (float) $sisiMiringKedua;
    }

    public function luas(): string
    {
        $total = 1 / 2 * ($this->atas + $this->bawah) * $this->tinggi;
        return "Luas Trapesium = $total";
    }

    public function keliling(): string
    {
        $total = $this->atas + $this->sisiMiringPertama + $this->sisiMiringKedua + $this->bawah;
        return "Keliling Trapesium = $total";
    }

    public function result(): void
    {
        echo "------------" . PHP_EOL;
        echo $this->luas() . PHP_EOL;
        echo $this->keliling() . PHP_EOL;
        echo "------------" . PHP_EOL;
    }
}
<?php
namespace src;

require_once "helper/helper.php";
require_once 'BangunDatarInterface.php';

class BelahKetupatClass implements BangunDatarInterface
{
    private int|float $atas, $bawah, $tinggi, $sisiSamping;

    public function __construct()
    {
        $input = input("masukan atas ");
        $atas = str_replace(",", ".", $input);
        $this->atas = (float) $atas;

        $input = input("masukan bawah ");
        $bawah = str_replace(",", ".", $input);
        $this->bawah = (float) $bawah;

        $input = input("masukan tinggi ");
        $tinggi = str_replace(",", ".", $input);
        $this->tinggi = (float) $tinggi;

        $input = input("masukan samping ");
        $sisiSamping = str_replace(",", ".", $input);
        $this->sisiSamping = (float) $sisiSamping;

    }

    public function luas(): string
    {
        $total = 1 / 2 * ($this->atas + $this->bawah) * $this->tinggi;
        return "Luas = $total";
    }

    public function keliling(): string
    {
        $total = $this->atas + ($this->sisiSamping * 2) + $this->bawah;
        return "Keliling = $total";

    }
    /**
     * @return mixed
     */
    public function result(): void
    {
        echo "------------" . PHP_EOL;
        echo $this->luas() . PHP_EOL;
        echo $this->keliling() . PHP_EOL;
        echo "------------" . PHP_EOL;
    }
}
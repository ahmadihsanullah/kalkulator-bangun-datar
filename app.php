<?php

use src\BangunDatarFactory;

require_once "./src/helper/helper.php";
require_once "./src/BangunDatarFactory.php";


function main():void
{

    $isContinue = true;

    while ($isContinue) {

        clearScreen();

        echo " ===== Selamat Datang di Kalkulator Bangun Datar ===== " . PHP_EOL;
        echo "Pilihan Bangun Datar" . PHP_EOL;
        echo "1. lingkaran" . PHP_EOL;
        echo "2. Belah Ketupat" . PHP_EOL;
        echo "3. Segitiga" . PHP_EOL;
        echo "4. Trapesium" . PHP_EOL;
        echo "5. Jajar genjang" . PHP_EOL;
        echo "6. Persegi" . PHP_EOL;
        echo "7. Persegi Panjang" . PHP_EOL;
        $data = input("Masukan Pilihan Anda");
        echo "---------------------" . PHP_EOL;
        switch (strtolower($data)) {
            case '1':
            case 'lingkaran':
                BangunDatarFactory::create("lingkaran")->result();
                break;
            case '2':
            case 'belah ketupat':
                BangunDatarFactory::create("belah ketupat")->result();
                break;
            case '3':
            case 'segitiga':
                BangunDatarFactory::create("segitiga")->result();
                break;
            case '4':
            case 'trapesium':
                BangunDatarFactory::create("trapesium")->result();
                break;
            case '5':
            case 'jajar genjang':
                BangunDatarFactory::create("jajar genjang")->result();
                break;
            case '6':
            case 'persegi':
                BangunDatarFactory::create("persegi")->result();
                break;
            case '7':
            case 'persegi panjang':
                BangunDatarFactory::create("persegi panjang")->result();
                break;
            default:
                echo "Masukan pilihan dengan benar !!" . PHP_EOL;
                break;
        }

        echo PHP_EOL . "Apakah anda ingin melanjutkan menghitung (y/n) ?";
        $data = input('');
        if (strcasecmp($data, 'y') == 0) {
            $isContinue = true;
        } else {
            $isContinue = false;
        }
    }

}
function clearScreen()
{
    print("\033[2J\033[;H");
}

main();
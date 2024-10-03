<?php

class Mobil
{

    // Property
    public $merk;
    public $model;
    public $tahun;
    public $warna;

    // Methode
    public function start()
    {
        echo 'Mobil dinyalakan';
    }

    public function cek($nama, $ket)
    {
        echo 'Merek :' . $this->merk . '<br>';
        echo 'Model :' . $this->model . '<br>';
        echo 'Tahun :' . $this->tahun . '<br>';
        echo 'Warna :' . $this->warna . '<br>';
        echo 'Pemilik :' . $nama . '<br>';
        echo 'Pemilik :' . $ket . '<br>';
    }

    public function stop()
    {
        echo 'Mobil dimatikan';
    }
}

class Kendaraan extends Mobil
{
    public $jenis;

    public function bergerak()
    {
        echo 'Kendaraan sedang bergerak';
    }
}

// Objek
$mobil = new Mobil();
$kendaraan = new Kendaraan();
$mobil->merk = 'Avansa';
$mobil->model = 'Nova';
$mobil->tahun = 2023;
$mobil->warna = 'Putih';

// Pangil Methode

$ket = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the  when an unknown printer took a galley of type and scrambled it to make a type specimen book.';


$mobil->cek("agus", $ket);

$kendaraan->merk = 'BMW';
echo $kendaraan->merk;

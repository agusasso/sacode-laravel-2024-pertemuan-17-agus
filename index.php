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

    public function cek($nama)
    {
        echo 'Merek :' . $this->merk . '<br>';
        echo 'Model :' . $this->model . '<br>';
        echo 'Tahun :' . $this->tahun . '<br>';
        echo 'Warna :' . $this->warna . '<br>';
        echo 'Pemilik :' . $nama . '<br>';
    }

    public function stop()
    {
        echo 'Mobil dimatikan';
    }
}

// Objek
$mobil = new Mobil();
$mobil->merk = 'Avansa';
$mobil->model = 'Nova';
$mobil->tahun = 2023;
$mobil->warna = 'Putih';

// Pangil Methode
$mobil->cek("agus");

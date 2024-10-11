<?php
    class mobil
    {
        var string $nama;
        var string $brand;
        var int $tahun;

        function __construct(string $nama, $brand, int $tahun)
        {
            $this->nama = $nama;
            $this->brand = $brand;
            $this->tahun = $tahun;
        }

        function infomobil()
        {
            return "NAMA MOBIL : $this->nama <br>
            BRAND : $this->brand <br>
            TAHUN : $this->tahun";
        }
    }
?>
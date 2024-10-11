<?php
    class mahasiswa
    {
        var $nama;
        var $nim;
        var $kelas;

        function __construct(String $nama, $nim, $kelas)
        {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->kelas = $kelas;
        }

        function infomahasiswa()
        {
            return "$this->nama, $this->nim, $this->kelas;";
        }
    }
?>
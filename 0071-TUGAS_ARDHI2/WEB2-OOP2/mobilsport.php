<?php
    class mobilsport extends mobil
    {
        public $turbo = false;

        function jalankanturbo()
        {
            $this->turbo = true;
            return "JALANKAN TURBO !";
        }

        function infomobil()
        {
            return "NAMA MOBIL SPORT : $this->nama <br>
            BRAND : $this->brand <br>
            TURBO : $this->turbo true";
        }
    }
?>
<?php
    class product
    {
        //deklarasi variabel
        protected string $name;
        protected int $price;

        //deklarasi konstruktur
        public function __construct(string $name, int $price)
        {
            $this->name = $name;
            $this->price = $price;
        }

        //membuat function getname dan getprice yang visibility public
        public function getname():string
        {
            return $this->name;
        }

        public function getprice():int
        {
            return $this->price;
        }
    }
?>
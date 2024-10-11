<?php
    class category
    {
        private string $name;
        private bool $expensive;

        public function getname():string
        {
            return $this->name;
        }

        public function setname(string $name):void
        {
            $this->name = $name;
        }

        public function isexpensive():bool
        {
            return $this->expensive;
        }

        public function setexpensive(bool $expensive):void
        {
            $this->expensive = $expensive;
        }
    }
?>
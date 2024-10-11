<?php

    interface hasbrand
    {
        function getbrand():string;
    }

    interface ismaintenance
    {
        function ismaintenance():bool;
    }

    interface car extends hasbrand
    {
        function drive():void;
        function gettire():int;
    }
    
    //impelementasi interface pada class childnya
    class avanza implements car
    {
        public function drive():void
        {
            echo "DRIVE AVANZA";
        }

        public function gettire():int
        {
            return 4;
        }

        public function getbrand():string
        {
            return "TOYOTA";
        }

        public function ismaintenance():bool
        {
            return false;
        }
    }
?>
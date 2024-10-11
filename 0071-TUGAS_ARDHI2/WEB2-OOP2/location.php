<?php
    //parent class
    abstract class location
    {
        public string $name;
    }

    //child class
    class city extends location
    {

    }

    class province extends location
    {

    }

    class country extends location
    {
        
    }
?>
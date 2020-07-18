<?php
        require 'vendor/autoload.php';

        use Bootstrap\Navbar;

        $items = array('home', 'about', 'login');

        $navbar = new Navbar($items);


        $navbar->listContent();

?>


<?php 

    namespace Bootstrap;


    class Navbar extends Bootstrap{

        private $content_navbar;
        
        public function __construct($content)
        {
            $this->content_navbar = $content; 
        }
        
        public function listContent(){
            foreach($content_navbar as $item){
                echo $item;
            }
        }

    }
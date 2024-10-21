<?php 

class Intro_greetings{

    function greetings_shortcode(){

        ob_start();
        echo "Hello World!";
        return ob_get_clean();
    }


    

}



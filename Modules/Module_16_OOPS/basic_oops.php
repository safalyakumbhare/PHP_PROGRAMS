<?php

    class  praju {
        public $behaviour,$food,$loves;
        
        function behavior(){
            echo "Praju is a ".$this->behaviour ." girl best friend";
        }

        function favourite_food(){
            echo "Praju likes to eat ".$this->food;
        }

        function loves(){
            echo "Praju loves to spend time with ".$this->loves;
        }
        
    }

    $obj = new praju();
    $obj->behaviour = "beautiful";
    $obj->food = "manchurian";
    $obj->loves = "";

    echo $obj -> behavior();
    echo $obj -> favourite_food();
    echo $obj -> loves();
     

?>
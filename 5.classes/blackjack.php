<?php
class Blackjack{
    
    public  $name;
    public  $score = 0;
    public  $turn = true;

    function set_name($name) {
        $this->name = $name;
      }

    function Hit(){
        if ($this->score <= 21) {
            $this->score += rand(1,10);
        }
        if ($this-> score > 21) {
            echo $this->name,"loses";
            $this->turn = false;
        }
       
    }

    function Stand(){
        $this->turn = false;
    }

    function Surrender(){                                                                           
        echo $this->name,"loses";
        $this->turn = false;
    }
}

?>
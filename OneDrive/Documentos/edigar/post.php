<?php
class post 

{
    public function get(string $index){
        if (empty($index)) return '';

        return isset($_POST[$index]) ? $_POST[$index] : '';
    }
    
}


<?php

class FizzBuzz{
	
    public function execute($number){

    	if($number%3 == 0 && $number%5 == 0){
    		return 'fizzbuzz';
    	} elseif ($number%3 == 0) {
    		return 'fizz';
    	} elseif ($number%5 == 0) {
    		return 'buzz';
    	} else {
    		return $number;
    	}

    }

    public function executeUpTo($number){
        
        $output = [];

        foreach (range(1, $number) as $i) {
        	$output[] = $this->execute($i);
        }

        return $output;
    }
}

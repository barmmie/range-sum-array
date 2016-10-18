<?php

class ArrayNum {

    private $sum = [];
    private $count;

    public function __construct( $numbers)
    {
        $this->count = count($numbers);
        $this->sum[0] = 0;

        for ($i = 1; $i <= $this->count; $i++) {
            $this->sum[$i] = $this->sum[$i -1] + $numbers[$i -1] ;
        }
 
    }


    public function countRangeSum($lower_bound, $upper_bound)
    {
        
        $count = 0;
        for ($i = 0; $i < $this->count; $i++) {
            for ($j = $i + 1; $j <= $this->count; $j++) {

                if ($this->sum[$j] - $this->sum[$i] >= $lower_bound && $this->sum[$j] - $this->sum[$i] <= $upper_bound) {
                    $count++;
                }
            }
        }
        return $count;
    }
}

<?php

    function perim_rec($long, $larg)
    {
        return ($long + $larg) * 2;
    }


    function surface_rec($long, $larg)
    {
        return ($long * $larg) ;
    }

    function sqr($a) {
        return $a*$a;
     }

    function diagonal_rec($long, $larg)
    {
        return sqrt(sqr($long) + sqr($larg));
    }

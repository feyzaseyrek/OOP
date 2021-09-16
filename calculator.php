<?php

class hesapla
{
    public function arti($n1, $n2)
    {
        return $n1 + $n2;
    }

    public function eksi($n1, $n2)
    {
        return  $n1 - $n2;
    }

    public function bolme($n1, $n2)
    {
        return  $n1 / $n2;
    }

    public function carpma($n1, $n2)
    {
        return  $n1 * $n2;
    }

    public function yenile($location)
    {
        header('location:'.$location);
    }
}

$hesapla = new hesapla();

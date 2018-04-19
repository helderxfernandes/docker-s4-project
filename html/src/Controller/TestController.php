<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class TestController
{
    public function add($a, $b)
    {
        return $a + $b;
    }
}

<?php

namespace App\Services\Interfaces;

interface ImportStrategyInterface
{    
    public function parse($arquivo) : string;
}
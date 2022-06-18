<?php

namespace App\Services\Strategies;

use App\Services\Interfaces\ImportStrategyInterface;
use Smalot\PdfParser\Parser;

class ImportPdfStrategy implements ImportStrategyInterface
{
    protected $parse;

    public function __construct()
    {
        $this->parser = new Parser();
    }
    public function parse($arquivo) : string
    {
        $texto = $this->parser->parseFile($arquivo)->getText();
        return $texto;
    }



}
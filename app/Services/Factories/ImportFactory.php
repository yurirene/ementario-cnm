<?php

namespace App\Services\Factories;

use App\Services\Interfaces\ImportStrategyInterface;
use App\Services\Strategies\ImportPdfStrategy;

class ImportFactory
{
    public static function make(string $mimeType) : ImportStrategyInterface
    {
        $class = self::getClass($mimeType);
        return app()->make($class);
    }

    public static function getClass(string $string) : string 
    {
        $classes = [
            'application/pdf' => 'App\Services\Strategies\ImportPdfStrategy'
        ];

        if (!isset($classes[$string])) {
            return 'App\Services\Strategies\ImportPdfStrategy';
        }

        if (!class_exists($classes[$string])) {            
            return 'App\Services\Strategies\ImportPdfStrategy';
        }

        return $classes[$string];
    }


}
<?php

namespace App\Services;

use App\Services\Factories\ImportFactory;
use App\Services\Interfaces\ImportStrategyInterface;
use Illuminate\Http\Request;

class ImportService
{
    public ImportStrategyInterface $strategy;

    public function import(Request $request)
    {
        try {
            $this->strategy = ImportFactory::make($request->arquivo->getMimeType());
            $texto = $this->strategy->parse($request->arquivo);
            ArquivoService::store($request, $texto);

        } catch (\Throwable $th) {
            throw $th;
        }

    }

    


}
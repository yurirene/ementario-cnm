<?php

namespace App\Services;

use App\Models\Arquivo;
use Illuminate\Http\Request;

class ArquivoService
{

    public static function store(Request $request, string $texto)
    {
        try {
            $path = $request->file('arquivo')->store('public/files');
            $arquivo = Arquivo::create([
                "nome" => $request->nome,
                "path" => $path,
                "texto" => $texto,
                "keywords" => $request->keywords,

            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }


}
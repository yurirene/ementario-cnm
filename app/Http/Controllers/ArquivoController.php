<?php

namespace App\Http\Controllers;

use App\DataTables\ArquivoDataTable;
use App\Services\ImportService;
use Illuminate\Http\Request;
use Smalot\PdfParser\Parser;

class ArquivoController extends Controller
{
    public $service;

    public function __construct(ImportService $service) 
    {
        $this->service = $service;
    }

    public function index(ArquivoDataTable $dataTable)
    {
        return $dataTable->render('dashboard.arquivos.index');
    }

    public function create()
    {
        return view('dashboard.arquivos.form');
    }

    public function store(Request $request)
    {
        try {
            $this->service->import($request);
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
}

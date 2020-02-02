<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function receiveFile(Request $request) {
        $validated = $this->validateCSV();
        $path = $this->storeFile($validated);
        $this->readFileHeaders($path);
        return $path;
    }

    public function validateCSV() { 
        return request()->validate([
            'csvFile' => 'required|mimes:csv,txt'
        ]);
    }

    public function storeFile($validatedFile) {
        $file = $validatedFile['csvFile'];   
        $path = $file->store('uploads');
        return $path;
    }

    public function readFileHeaders($filePath) {
        $handler = fopen(storage_path('app/' . $filePath),'r');
        $headers = fgetcsv($handler);
        dd($headers);
    }
}




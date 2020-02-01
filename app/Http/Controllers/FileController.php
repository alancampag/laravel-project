<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function saveFile(Request $request) {
        $validated = $this->validateCSV();
        // $file = $validated->file('csvFile');
        // $path = $file->store('uploads');
        // return $path;
        dd($request);
    }

    public function validateCSV() { 
        return request()->validate([
            'csvFile' => 'required|mimes:csv,xlsx,xls'
        ]);
    }
}



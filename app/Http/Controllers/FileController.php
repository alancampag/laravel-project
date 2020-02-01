<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function saveFile(Request $request) {
        $validated = $this->validateCSV();
        $file = $validated['csvFile'];   
        $path = $file->store('uploads');
        return $path;
    }

    public function validateCSV() { 
        return request()->validate([
            'csvFile' => 'required|mimes:csv,txt'
        ]);
    }
}




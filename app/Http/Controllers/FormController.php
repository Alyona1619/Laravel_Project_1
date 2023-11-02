<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function storeData(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|alpha|max:255',
            'age' => 'required|integer|min:1|max:150',
            'email' => 'required|email|max:255',
        ]);

        $uniqueFileName = 'data_' . time() . '.json';
        file_put_contents(storage_path($uniqueFileName), json_encode($data));

        return 'Данные успешно сохранены в файл ' . $uniqueFileName;
    }

    public function showData(){
        $jsonDirectory = storage_path();
        
        $jsonFiles = File::files($jsonDirectory, function ($filename) {
            return pathinfo($filename, PATHINFO_EXTENSION) === 'json';
        });
    
        $data = [];
    
        foreach ($jsonFiles as $jsonFile) {
            $data[] = json_decode(File::get($jsonFile), true);
        }
    
        return view('data', ['data' => $data]);
    }
}

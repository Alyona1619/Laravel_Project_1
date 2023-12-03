<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\DataResource;
use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        return DataResource::collection(Data::all());
    }

    public function show($id)
    {
        return new DataResource(Data::findOrFail($id));
    }
    
    
}


<?php
#task Laravel: working with data
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Http\Resources\DataResource;

class DataController extends Controller
{
    public function index()
    {
        $data = Data::all();
        return view('data.index', compact('data'));
    }

    public function show($id)
    {
        $item = Data::findOrFail($id);
        return view('data.show', compact('item'));
    }

    public function create()
    {
        return view('data.create');
    }

    public function store(Request $request)
    {
        $data = Data::create($request->all());
        return redirect()->route('data.show', $data->id);
    }

    public function edit($id)
    {
        $item = Data::findOrFail($id);
        return view('data.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $data = Data::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('data.show', $data->id);
    }

    public function destroy($id)
    {
        $data = Data::findOrFail($id);
        $data->delete();
        return redirect()->route('data.index');
    }

    public function showAdultData()
    {
        $adultData = Data::adults()->get();
        return view('users.adults', compact('adultData'));
    }

    public function showApi($id)
    {
        $data = Data::findOrFail($id);
        return new DataResource($data);
    }
}


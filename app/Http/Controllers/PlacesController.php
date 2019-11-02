<?php

namespace App\Http\Controllers;
use App\Places;
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    public function index()
    {
        return Places::all();
    }
 
    public function show($id)
    {
        return Places::find($id);
    }

    public function store(Request $request)
    {
        return Places::create($request->all());
        
    }

    public function update(Request $request, $id)
    {
        $place = Places::findOrFail($id);
        $place->update($request->all());

        return $place;
    }

    public function delete(Request $request, $id)
    {
        $place = Places::findOrFail($id);
        $place->delete();

        return 204;
    }
}

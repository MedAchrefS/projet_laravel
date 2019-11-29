<?php

namespace App\Http\Controllers;
use App\Places;
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    public function index()
    {
        $places = Places::latest()->paginate(5);
  
        return view('places.index',compact('places'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('places.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'Description' => 'required',
        ]);
  
        $place=new Places([
            'name' => $request->get('name'),
            'Description' => $request->get('Description'),
        ]);
        $place->save();
   
        return redirect()->route('places.index')
                        ->with('success','places created successfully.');
    }

    public function show(Places $place)
    {
        return view('places.show',compact('place'));
    }

    public function edit(Places $place)
    {
        return view('places.edit',compact('place'));
    }

    public function update(Request $request, Places $place)
    {
        $request->validate([
            'name' => 'required',
            'Description' => 'required',
        ]);
  
        $place->update($request->all());
  
        return redirect()->route('places.index')
                        ->with('success','Places updated successfully');
    }

    public function destroy(Places $place)
    {
        $place->delete();
  
        return redirect()->route('places.index')
                        ->with('success','place deleted successfully');
    }
 
}

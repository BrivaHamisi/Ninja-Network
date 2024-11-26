<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ninja;
use App\Models\Dojo;

class NinjaController extends Controller
{
    public function index() {
        // route --> /ninjas/
        // fetch all records & pass into the index view
  
        // $ninjas = Ninja::all();
        $ninjas = Ninja::with('dojo')->orderBy('created_at', 'desc')->paginate(10);
  
        return view('ninjas.index', ['ninjas' => $ninjas]);
      }
  
      public function show($id) {
        // route --> /ninjas/{id}
        // fetch a single record & pass into show view
        $ninja = Ninja::with('dojo')->findOrFail($id);
        return view('ninjas.show', ['ninja' => $ninja]);
      }
  
      public function create() {
        // route --> /ninjas/create
        // render a create view (with web form) to users
        $dojos = Dojo::all();
        return view('ninjas.create', ['dojos' => $dojos]);
      }
  
      public function store(Request $request) {
        // --> /ninjas/ (POST)
        // hanlde POST request to store a new ninja record in table
        $validated = $request->validate([
          'name' => ['required','string','max:255'],
          'skills' => ['required','integer','min:0', 'max:100'],
          'bio' => ['required','string','min:20','max:1000'],
          'dojo_id' => 'required|exists:dojos,id',
        ]);

        Ninja::create($validated);
        return redirect()->route('ninjas.index')->with('success', 'Ninja created successfully');

      }
  
      public function destroy($id) {
        // --> /ninjas/{id} (DELETE)
        // handle delete request to delete a ninja record from table
        $ninja = Ninja::findOrFail($id);
        if($ninja){
            $ninja->delete();
            return redirect()->route('ninjas.index')->with('success', 'Ninja deleted successfully');
        }
        return redirect()->route('ninjas.index')->with('error', 'Ninja not found');
      }
  
      // edit() and update() for edit view and update requests
      // we won't be using these routes
}

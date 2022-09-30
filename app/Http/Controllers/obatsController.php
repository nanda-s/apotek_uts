<?php

namespace App\Http\Controllers;
use App\Models\obats;
use Illuminate\Http\Request;

class obatsController extends Controller
{
    public function index()
    {
        $obats = obats::all();
      return view ('obats.index')->with('obats', $obats);
    }

    
    public function create()
    {
        return view('obats.create');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        obats::create($input);
        return redirect('obats')->with('flash_message', 'obats Addedd!');  
    }

    
    public function show($id_obat)
    {
        $obats = obats::find($id_obat);
        return view('obats.show')->with('obats', $obats);
    }

    
    public function edit($id_obat)
    {
        $obats = obats::find($id_obat);
        return view('obats.edit')->with('obats', $obats);
    }

  
    public function update(Request $request, $id_obat)
    {
        $obats = obats::find($id_obat);
        $input = $request->all();
        $obats->update($input);
        return redirect('obats')->with('flash_message', 'obats Updated!');  
    }

   
    public function destroy($id_obat)
    {
        obats::destroy($id_obat);
        return redirect('obats')->with('flash_message', 'obats deleted!');  
    }
}
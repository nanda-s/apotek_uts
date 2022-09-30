<?php

namespace App\Http\Controllers;
use App\Models\supply;
use Illuminate\Http\Request;

class supplyController extends Controller
{
    public function index()
    {
        $supply = supply::all();
      return view ('supply.index')->with('supply', $supply);
    }

    
    public function create()
    {
        return view('supply.create');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        supply::create($input);
        return redirect('supply')->with('flash_message', 'supply Addedd!');  
    }

    
    public function show($id_supply)
    {
        $supply = supply::find($id_supply);
        return view('supply.show')->with('supply', $supply);
    }

    
    public function edit($id_supply)
    {
        $supply = supply::find($id_supply);
        return view('supply.edit')->with('supply', $supply);
    }

  
    public function update(Request $request, $id_supply)
    {
        $supply = supply::find($id_supply);
        $input = $request->all();
        $supply->update($input);
        return redirect('supply')->with('flash_message', 'supply Updated!');  
    }

   
    public function destroy($id_supply)
    {
        supply::destroy($id_supply);
        return redirect('supply')->with('flash_message', 'supply deleted!');  
    }
}
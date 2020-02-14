<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;

class ClothController extends Controller
{
    public function index() {
        $vestiti = Cloth::all();
		return view('clothes',['vestiti'=>$vestiti]);
	}

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $dati = $request->all();
        $new_cloth = new Cloth();
        $new_cloth->name = $dati['name'];
        $new_cloth->description = $dati['description'];
        $new_cloth->price = $dati['price'];
        // $new_cloth->fill($dati);
        $new_cloth->save();
        return redirect()->route('clothes');
    }
}

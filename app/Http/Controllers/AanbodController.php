<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AanbodController extends Controller
{   
    public function home(){
        return view('Lenen.landingpage', [
            'item' => \App\Models\items::all(),
            'categories' => \App\Models\categories::all(),
        ]);
    }

    public function showCat($id){
        return view('Lenen.aanbod', [
            'item' => \App\Models\items::find($category),
            'reviews' => \App\Models\Review::all(),
        ]);
    }

    public function show(){
        return view('Lenen.aanbod', [
            'item' => \App\Models\items::all(),
            'reviews' => \App\Models\Review::all(),
        ]);
    }

    public function create(){
        return view('Lenen.create', [
            'categories' => \App\Models\categories::all(),
            'user' => \App\Models\User::all()
        ]);
    }

    public function store(Request $request, \App\Models\items $items){
        $items->name = $request->input('name');
        $items->category = $request->input('category');
        $items->location = $request->input('location');
        $items->image = $request->input('image');
        $items->image2 = $request->input('image2');
        $items->image3 = $request->input('image3');
        $items->description = $request->input('description');
        $items->image = $request->input('image');
        $items->owner = Auth::user()->username;
        $items->deadline = $request->input('deadline');

        try{
            $items->save();
            return redirect('/aanbod');
            //MESSAGE
        }catch(Exception $e){
            return redirect('/aanbod/create');
            //ERROR MESSAGE
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\UploadTrait;
use Illuminate\Support\Str;
use App\Models\items;

class AanbodController extends Controller
{    
    use UploadTrait;

    public function home(){
        return view('Lenen.landingpage', [
            'item' => \App\Models\items::all(),
            'categories' => \App\Models\categories::all(),
        ]);
    }

    public function showCat($category){
        return view('Lenen.aanbod', [
            'userRole' => Auth::user(),
            'item' => \App\Models\items::where('category', '=', $category)->get(),
            'reviews' => \App\Models\Review::all(),
            'categories' => \App\Models\categories::all(),
        ]);
    }

    public function show(){
        return view('Lenen.aanbod', [
            'userRole' => Auth::user(),
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
        $items->description = $request->input('description');
        $items->image = $request->file('image')->move('./img', $items->name);
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

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
            'item' => \App\Models\items::where('category', '=', $category)->get(),
            'reviews' => \App\Models\Review::all(),
            'categories' => \App\Models\categories::all(),
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
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        // ]);

        $items->name = $request->input('name');
        $items->category = $request->input('category');
        $items->location = $request->input('location');
        // if ($request->has('image')) {
        //     // Get image file
        //     $image = $request->file('image');
        //     // Make a image name based on user name and current timestamp
        //     $name = Str::slug($request->input('name')).'_'.time();
        //     // Define folder path
        //     $folder = '/public/img/';
        //     // Make a file path where image will be stored [ folder path + file name + file extension]
        //     $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
        //     // Upload image
        //     $this->uploadOne($image, $folder, 'public', $name);
        //     // Set user profile image path in database to filePath
        //     $items->image = $filePath;
        // }

        // // $items->image = $path;
        // // $items->image2 = $request->image2->store('img', 'public/img' );
        // // $items->image3 =  $request->image3->store('img', 'public/img');
        
        $items->description = $request->input('description');
        $items->image = $request->file('image')->store('img'); //$request->input('image');
        $items->owner = Auth::user()->username;
        $items->deadline = $request->input('deadline');

        $items->save();
        return redirect('/aanbod');
        //return $request->file('image')->store('');
        // try{
        //     $items->save();
        //     return redirect('/aanbod');
        //     //MESSAGE
        // }catch(Exception $e){
        //     return redirect('/aanbod/create');
        //     //ERROR MESSAGE
        // }
    }
}

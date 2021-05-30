<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function order(\App\Models\User $user, \App\Models\reservedItems $reservedItem, \App\Models\items $item){
        $reservedItem->name = $item::where('id', '=', 1)->first()->name;
        $reservedItem->category = $item::where('id', '=', 1)->first()->category;
        $reservedItem->description = $item::where('id', '=', 1)->first()->description;
        $reservedItem->location = $item::where('id', '=', 1)->first()->location;
        $reservedItem->image = $item::where('id', '=', 1)->first()->image;
        $reservedItem->owner = $item::where('id', '=', 1)->first()->owner;
        $reservedItem->deadline = $item::where('id', '=', 1)->first()->deadline;
        $reservedItem->borrower = Auth::user()->username;
        try{
            $reservedItem->save();
            return redirect('/account');
            //MESSAGE
        }catch(Exception $e){
            return redirect('/aanbod');
            //ERROR MESSAGE
        }
        //UITGELEENDE SPULLEN TABEL:
        // $borrowedItem->name = $item::where('id', '=', 1)->first()->name;
        // $borrowedItem->category = $item::where('id', '=', 1)->first()->category;
        // $borrowedItem->description = $item::where('id', '=', 1)->first()->description;
        // $borrowedItem->location = $item::where('id', '=', 1)->first()->location;
        // $borrowedItem->image = $item::where('id', '=', 1)->first()->image;
        // $borrowedItem->owner = $item::where('id', '=', 1)->first()->owner;
        // $borrowedItem->deadline = $item::where('id', '=', 1)->first()->deadline;
        // $borrowedItem->borrower = Auth::user()->username;
        // try{
        //     $borrowedItem->save();
        //     return redirect('/aanbod');
        //     //MESSAGE
        // }catch(Exception $e){
        //     return redirect('/aanbod');
        //     //ERROR MESSAGE
        // }
    }

    public function personalPage(){
        return view('User.personalPage', [
            'activeUser' => Auth::user()->name,
            'reservedItems' => \App\Models\reservedItems::where('owner', '=', Auth::user()->username)->get(),
            'borrowedItems' => \App\Models\reservedItems::where('borrower', '=', Auth::user()->username)->get(),
        ]);
    }
}

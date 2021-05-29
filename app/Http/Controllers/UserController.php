<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function order(\App\Models\User $user, \App\Models\reservedItems $reservedItem, \App\Models\items $item){
        $reservedItems->name = $item->name;
        $reservedItems->category = $item->category;
        $reservedItems->description = $item->description;
        $reservedItems->location = $item->location;
        $reservedItems->image = $item->image;
        $reservedItems->owner = $item->owner;
        $reservedItems->deadline = $item->deadline;
        $reservedItems->borrower = Auth::user()->username;
        try{
            $items->save();
            return redirect('/aanbod');
            //MESSAGE
        }catch(Exception $e){
            return redirect('/aanbod');
            //ERROR MESSAGE
        }
    }
}

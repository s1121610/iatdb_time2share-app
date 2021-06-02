<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class UserController extends Controller
{
    public function order($id, \App\Models\User $user, \App\Models\reservedItems $reservedItem, \App\Models\items $item){
        $id = $item::find($id)->id;
        print($id);
        $reservedItem->name = $item::where('id', '=', $id)->first()->name;
        $reservedItem->category = $item::where('id', '=', $id)->first()->category;
        $reservedItem->description = $item::where('id', '=', $id)->first()->description;
        $reservedItem->location = $item::where('id', '=', $id)->first()->location;
        $reservedItem->image = $item::where('id', '=', $id)->first()->image;
        $reservedItem->owner = $item::where('id', '=', $id)->first()->owner;
        $reservedItem->deadline = $item::where('id', '=', $id)->first()->deadline;
        $reservedItem->borrower = Auth::user()->username;
        $reservedItem->atBorrower = true;
        try{
            $reservedItem->save();
            //VERWIJDER UIT AANBOD TABEL:
            DB::table('items')->where('id', '=', $id)->delete();
            return redirect('/account');
            //MESSAGE
        }catch(Exception $e){
            return redirect('/aanbod');
            //ERROR MESSAGE
        }       
    }

    public function acceptedItem($id, \App\Models\User $user, \App\Models\reservedItems $reservedItem, \App\Models\items $item){
        $id = \App\Models\reservedItems::find($id)->id;
        print($id);
        $item->name = $reservedItem::where('id', '=', $id)->first()->name;
        $item->category = $reservedItem::where('id', '=', $id)->first()->category;
        $item->description = $reservedItem::where('id', '=', $id)->first()->description;
        $item->location = $reservedItem::where('id', '=', $id)->first()->location;
        $item->image = $reservedItem::where('id', '=', $id)->first()->image;
        $item->owner = $reservedItem::where('id', '=', $id)->first()->owner;
        $item->deadline = $reservedItem::where('id', '=', $id)->first()->deadline;
        try{
            $item->save();
            //VERWIJDER UIT AANBOD TABEL:
            DB::table('reservedItems')->where('id', '=', $id)->delete();
            return redirect('/account');
            //MESSAGE
        }catch(Exception $e){
            return redirect('/aanbod');
            //ERROR MESSAGE
        }       
    }

    public function returnedItem($id){
        $id = \App\Models\reservedItems::find($id)->id;
        DB::update('update reservedItems set atBorrower = false where id = ?', [$id]);
        return redirect('/account');
    }

    public function personalPage(){
        return view('User.personalPage', [
            'users' => \App\Models\User::all(),
            'userList' => \App\Models\User::where('role', '!=', 'admin')->where('banned', '=', false)->get(),
            'blockedUsersList' => \App\Models\User::where('banned', '=', true)->where('role', '=', 'user')->get(),
            'activeUser' => Auth::user()->name,
            'userRole' => Auth::user()->role,
            'myItems' => \App\Models\items::where('owner', '=', Auth::user()->username)->get(),
            'reservedItems' => \App\Models\reservedItems::where('owner', '=', Auth::user()->username)->get(),
            'borrowedItems' => \App\Models\reservedItems::where('borrower', '=', Auth::user()->username)->where('atBorrower', '=', true)->get(),
            'atBorrower' => DB::table('reservedItems')->select('atBorrower')->get(),
        ]);
    }

    function deleteItem($id){
        DB::table('items')->where('id', '=', $id)->delete();
        return redirect('/account');
    }
    
    function showProfile($username){
        return view('User.profile', [
            'user' => \App\Models\User::where('username', '=', $username)->first(),
            'item' => \App\Models\items::where('owner', '=', $username)->get(),
        ]);
    }
}

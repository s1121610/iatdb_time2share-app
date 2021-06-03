<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    function deleteItemPage(){
        return view('User.admin.controlItems', [
            'users' => \App\Models\User::all(),
            'items' => \App\Models\items::all(),
        ]);
    }

    function blockUser(Request $request){
        $userToBlock = $request->input('username');
        DB::update('update users set banned = true where username = ?', [$userToBlock]);
        return redirect('/account');
    }

    function deblockUser(Request $request){
        $userToDeblock = $request->input('username');
        DB::update('update users set banned = false where username = ?', [$userToDeblock]);
        return redirect('/account');
    }

    function blockedUser(){
        return view('User.blocked.blocked--message', [
            'users' => \App\Models\User::all(),
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function deleteItemPage(){
        return view('User.admin.controlItems', [
            'users' => \App\Models\User::all(),
            'items' => \App\Models\items::all(),
        ]);
    }
}

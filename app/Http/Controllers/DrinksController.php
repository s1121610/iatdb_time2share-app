<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DrinksController extends Controller
{
    public function index(){
        if(Auth::user()){
            if(Auth::user()->age > 17){
                return view('drinks.index', ['drinks' => \App\Models\Drink::all()]);
            }
            else{
                echo "Je moet ten minste 18 jaar oud zijn om deze pagina te bekijken";
                return redirect('/');
            }
        }
    }
}

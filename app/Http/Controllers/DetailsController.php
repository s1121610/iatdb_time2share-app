<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DetailsController extends Controller
{
    public function show($id){
        return view('Lenen.itemDetails', [
            'item' => \App\Models\items::find($id),

        ]);
    }

    public function post(Request $request,\App\Models\Review $items, \App\Models\items $item){
        $items->title = $request->input('title');
        $items->review = $request->input('review');
        $items->score = $request->input('score');
        $items->item = $request->input('id');
        $items->user = Auth::user()->username;

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

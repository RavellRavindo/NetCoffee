<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffee;
use Illuminate\Support\Facades\Validator;

class CoffeeController extends Controller
{
    public function show(){
        $coffeedata = Coffee::all();

        return view('coffeeVariant', ['coffeedata' => $coffeedata]);
    }

    public function insert (Request $request){
        $coffee = new Coffee;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back();
        }
        
        $coffee->text = $request->description;
        $coffee->name = $request->name;
        $link = $request->file('image')->store('public');
        $coffee->img = $link;

        $coffee->save();

        return redirect()->back();
    }
    public function update(Request $request){
        $coffee = Coffee::where('name', $request->name)->first();

        if(!$coffee){
            return redirect()->back();
        }

        $validator = Validator::make($request->all(), [
            'newname' => 'required',
            'newdescription' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back();
        }

        $coffee->name = $request->newname;
        $coffee->text = $request->newdescription;

        $coffee->save();

        return redirect()->back();
    }
    public function delete(Request $request){
        $coffee = Coffee::where('name', $request->name)->first();

        if(!$coffee){
            return redirect()->back();
        }

        $coffee->delete();

        return redirect()->back();
    }
}

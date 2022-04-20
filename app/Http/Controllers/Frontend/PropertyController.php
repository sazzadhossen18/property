<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Property;
use App\Location;
use App\Customer;
class PropertyController extends Controller
{
    
    public function addproperty (){
        $locations = Location::all();
        return view('frontend.add_property',compact('locations'));
    }


    public function storeproperty(Request $request){
        
        $property = new Property();
        $property->name = $request->name;
        $property->location_id = $request->location_id;
        $property->address = $request->address;  
        $property->city = $request->city; 
        $property->state = $request->state; 
        $property->zipcode = $request->zipcode; 
        $property->bedroom = $request->bedroom; 
        $property->bathroom = $request->bathroom; 
        $property->area = $request->area; 
        $property->garage = $request->garage; 
        $property->description = $request->description; 
        $property->video = $request->video; 
        $property->type = $request->type; 
        $property->sale_status = $request->sale_status; 
        $property->price = $request->price; 
        $property->save();
        return redirect()->back();

    }



    public function userregister(Request $request){
        $user = new Customer();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back();
    }






}





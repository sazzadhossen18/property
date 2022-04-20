<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Property;
use App\Location;
class FrontendController extends Controller
{
   


   
    public function index(){
    	$propertys = Property::get();
        $locations = Location::all();
        return view('frontend.index',compact('propertys','locations'));
    }


    public function singleproperty($id){
    	$propertys = Property::find($id);
        return view('frontend.property_details',compact('propertys'));
    }



    public function allproperty(Request $request){

        $propertys = Property::latest();

        if(!empty($request->sale_status)){
            $propertys=$propertys->where('sale_status',$request->sale_status);
        }
        if(!empty($request->name)){
            $propertys=$propertys->where('name',$request->name);
        }
        if(!empty($request->location_id)){
            $propertys=$propertys->where('location_id',$request->location_id);
        }
        if(!empty($request->type)){
            $propertys=$propertys->where('type',$request->type);
        }

        if(!empty($request->bedroom)){
            $propertys=$propertys->where('bedroom',$request->bedroom);
        }
        if($request->min_price && $request->max_price){
          // This will only executed if you received any price
          // Make you you validated the min and max price properly
          $propertys = $propertys->where('price','>=',$request->min_price);
          $propertys = $propertys->where('price','<=',$request->max_price);
      }
    $propertys= $propertys->paginate(1);
    return view('frontend.property_all',compact('propertys'));
    }



    public function locationbyproperty($id){

        $loc_by_property= Property::where('location_id', $id)->paginate('10');
        return view('frontend.property_by_location',compact('loc_by_property'));
    }







}

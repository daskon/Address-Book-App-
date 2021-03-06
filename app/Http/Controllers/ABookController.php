<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\ContriesList;
use App\UserAddresses;
use App\UserDetails;

class ABookController extends Controller
{
   //display dashboard
   public function index(){
       return view('web.dashboard');
   }

   //display user details entering form
   public function create(){

      //if (!$books) {
      //      throw new HttpException(400, "Invalid data");
      //}

      if (UserDetails::where('user_id', '=', Auth::user()->id)->count() > 0) {
           return redirect()->back()->with("status","You have alredy filled details ");
      }
      else{ 
            $contries = ContriesList::all();
            return view('web.AddDetailsForm',compact(['contries']));
      }
   }

   //display already inserted data for edit
   public function edit($id){

    if (UserDetails::where('user_id', '=', $id)->count() > 0) {
        
           $user_address = UserAddresses::where('user_id', $id)->firstOrFail();
           $user_details = UserDetails::where('user_id', $id)->firstOrFail();

           return view('web.UpdateDetails',compact('user_address','user_details'));
    }
    else{
           return redirect()->back()->with("status","You should fill your details before "); 
        }
    }

   //view already inserted data
   public function show($id){

      if (UserDetails::where('user_id', '=', $id)->count() > 0) {
            $userd = UserDetails::where('user_id', $id)->firstOrFail();
            $address = UserAddresses::where('user_id', $id)->firstOrFail();

            return view('web.ShowDetails', compact('userd','address') );
        }
        else{
           return redirect()->back()->with("status","You should fill your details before "); 
        }

   }
}

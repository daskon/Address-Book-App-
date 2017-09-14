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
   public function index(){
       return view('web.dashboard');
   }

   public function create(){

      if (UserDetails::where('user_id', '=', Auth::user()->id)->count() > 0) {
           return redirect()->back()->with("status","You have alredy filled details ");
      }
      else{ 
            $contries = ContriesList::all();
            return view('web.AddDetailsForm',compact(['contries']));
      }
   }

   public function destroy($id){

        UserDetails::where('user_id', $id)->delete();
        UserAddresses::where('user_id', $id)->delete();

        return back()->with("status","Your details has been deleted successfuly");

   }

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
}

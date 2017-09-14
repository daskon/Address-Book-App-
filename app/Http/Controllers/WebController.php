<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\ContriesList;
use App\UserAddresses;
use App\UserDetails;

class WebController extends Controller
{
    public function create(){

      
    }

    public function EditDetails(){

        
    }

    public function ShowDetails(){

        if (UserDetails::where('user_id', '=', Auth::user()->id)->count() > 0) {
            $userd = UserDetails::where('user_id', Auth::user()->id)->firstOrFail();
            $address = UserAddresses::where('user_id', Auth::user()->id)->firstOrFail();

            return view('web.ShowDetails', compact('userd','address') );
        }
        else{
           return redirect()->back()->with("status","You should fill your details before "); 
        }
    }

    public function DeleteDetails(){

       
    }

    public function AllDetails(){
        
        $address = DB::table('user_addresses')->paginate(4);

         return view('web.AllDetails',['address' => $address] );
    }
}

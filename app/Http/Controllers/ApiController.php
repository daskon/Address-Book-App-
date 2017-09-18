<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\ContriesList;
use App\UserAddresses;
use App\UserDetails;

class ApiController extends Controller
{
    //insert new record into database
    public function store(Request $request){

                $this->validate($request,[
                    'passport_number' => 'required|max:15',
                    'phone_number' => 'required|numeric|min:10',
                    'address1' => 'required',
                    'postcode' => 'required|numeric|min:4',
                    'country' => 'required',
                    'state' => 'required|max:40'
                ]);

                $storedetails = new UserDetails([
                    'user_id' => Auth::user()->id,
                    'passport_number' => $request->input('passport_number'),
                    'phone_number' => $request->input('phone_number')
                ]);

                $storeaddress = new UserAddresses([
                    'user_id' => Auth::user()->id,
                    'address1' => $request->input('address1'),
                    'postcode' => $request->input('postcode'),
                    'country' => $request->input('country'),
                    'state' => $request->input('state')
                ]);

                $storedetails->save();
                $storeaddress->save();

        return back()->with("status","Your details has been recorded");
    }

    //update details
    public function update(Request $request){

        $this->validate($request,[
            'passport_number' => 'required|max:15',
            'phone_number' => 'required|numeric|min:10',
            'address1' => 'required',
            'postcode' => 'required|numeric|min:4'
        ]);

        UserDetails::where('user_id',Auth::user()->id)
                  ->update([
                            'passport_number' => $request->input('passport_number'),
                            'phone_number' => $request->input('phone_number')
        ]);

        UserAddresses::where('user_id',Auth::user()->id)
                  ->update([
                            'address1' => $request->input('address1'),
                            'postcode' => $request->input('postcode')
        ]);

        return redirect()->back()->with("status","Your details has been updated successfuly");
    }

    //show all the user details to administrator
    public function show(){

         $address = DB::table('user_addresses')->paginate(4);

         return view('web.AllDetails',['address' => $address] );
         
    }
 
    //delete user details
    public function destroy(){

        UserDetails::where('user_id', Auth::user()->id)->delete();
        UserAddresses::where('user_id', Auth::user()->id)->delete();

        return back()->with("status","Your details has been deleted successfuly");

   }
}

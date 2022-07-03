<?php

namespace App\Http\Controllers;

use App\Models\Website_table;
use Illuminate\Http\Request;
class temp {
    public $name, $cname,$email,$phone,$details;
    function __construct() {
     $this->name = "";
     $this->cname = "";
     $this->email = "";
     $this->phone = "";
     $this->detials = "";

   }

 }
class WebsiteController extends Controller
{
    
    public function index(){
       
        $url=url("/enquiry");
        $title = "Registration";
        $customer = new temp;
        $data = compact('customer', 'url', 'title');
        return view('form')->with($data);
    }

    public function store(Request $request){
        
        //print the data on screen
        // echo "<pre>";
        // print_r($request->all());

        //insert query through Website_table model
        $enquiry  = new Website_table;
        $enquiry->name = $request['name'];
        $enquiry->cname = $request['cname'];
        $enquiry->phone = $request['phone'];
        $enquiry->email = $request['email'];
        $enquiry->details = $request['details'];
        $enquiry->save();
        //-------------
        return redirect('/enquiry/view');
    }

    public function view(){
        $enquiryData = Website_table::all();
        $data = compact('enquiryData');
        return view('enquiry-view')->with($data);
    }

    public function deleteE($id)
    {
      //delete quary
        $customer = Website_table::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }
        return redirect('/enquiry/view');

    }

    public function edit($id){
        //
        $customer = Website_table::find($id);
        if(!is_null($customer)){
            $url = url('/enquiry/update')."/".$id;
            $title = "Update Data";
            $data = compact('customer','url', 'title');

            return view('form')->with($data);   
        }else{
            return redirect('/enquiry/view');
        }

    }
    public function update($id, Request $request){
        //for updation 
        $enquiry = Website_table::find($id);
        $enquiry->name = $request['name'];
        $enquiry->cname = $request['cname'];
        $enquiry->phone = $request['phone'];
        $enquiry->email = $request['email'];
        $enquiry->details = $request['details'];
        $enquiry->save();
        return redirect('enquiry/view');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Mail;
class CustomerController extends Controller
{
    //
    public function index(){
        return view('form');
    }
    public function store(Request $request){
        

    }
    // public function email_send(Request $request){
         
         
    //     //  $customer = new Customer;
    //     //  $customer->name = $request['name'];
    //     //  $customer->email = $request['email'];
    //     //  $customer->gender =$request['gender'];
    //     //  $customer->address = $request['address'];
    //     //  $customer->dob = $request['dob'];

    //      $data['name'] = $request['name'];
    //      $data['email'] = $request['email'];
    //      $data['phone'] = $request['phone'];
    //      $data['cname'] =$request['cname'];
    //      $data['details'] = $request['details'];
    //      $user['to'] = "info@thesileo.com";
    //      Mail::send('messageStyle',$data, function($message) use ($user){
    //         $message->to('info@thesileo.com');
    //         $message->subject('Sileo sales enquiry');
    //      });
    //      return view('success');
    // }
}

<?php

namespace App\Http\Controllers;

use App\Models\FormModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class FrontController extends Controller
{
    public function store(Request $request)
    {
       
            $this->validate($request, [
                'firstname'=>'required',
                'phone'=>'required',
                'email' => 'required|email',
                'service'=>'required',
            ]);
            $inputs = $request->all();
            $return = array();
            // Mail::send('mail', array(
            //     'email' => $request->get('email'), 
            // ), function($message) use ($request){
            //     $message->from('it.teamaccsol@gmail.com');
            //     $message->to($request->email)->subject('Thanks for contacting.');
            // });

            $contact = FormModel::create($inputs);
            $return['status'] = 1;
            $return['message'] = "Thanks for contacting us! We will be in touch with you shortly.";

            return response()->json($return);
        
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function mail(Request $request) {
        $validate= $request->validate([
'Name'=>"required",
'email'=>"required",
'phone'=>"required",

        ],[
            'Name.required'=>"Name is required",
            'email.required'=>"Email is required",
            'phone.required'=>"Phone Number is required",
        ]);
            $data = [
                'Name' => $request->Name,
                'email' => $request->email, // Ensure this is not null
                'address' => $request->Write_Message,
                'phone' => $request->phone,
                'to_email'=>$request->To_Email,
            ];
            if (empty($data['email'])) {
                return response()->json(['error' => 'Email address is required.'], 400);
            }

            Mail::send('Pages.Email.email', $data, function ($message) use ($data) {
                $message->from($data['email'], 'Talha Rehman');
                $message->to($data['to_email'], $data['Name']);
                $message->subject('Subject');
            });

       return  response()->json([
        'message'=>200,
       ]);
    }

}

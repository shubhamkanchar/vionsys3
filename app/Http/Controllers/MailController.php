<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(Request $request)
    {
        $mailData = [
            'title' => 'Mail from '.$request->name,
            'body' => 'This mail is from vionsys. mailer details as follow.',
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
         
        Mail::to(config('details.mail'))->send(new TestEmail($mailData));
           
        return true;
    }
}

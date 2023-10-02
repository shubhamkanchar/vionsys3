<?php

namespace App\Http\Controllers;

use App\Mail\appliMail;
use App\Mail\TestEmail;
use Exception;
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
        
        try{
            Mail::to(config('details.mail'))->send(new TestEmail($mailData));
            return true;
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function applyMail(Request $request)
    {
        $mailData = [
            'title' => 'Mail from '.$request->name,
            'body' => 'This mail is from vionsys. mailer details as follow.',
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'experience' => $request->experience,
            'job' => $request->job,
            'resume' => $request->resume,
        ];
        
        try{
            Mail::to(config('details.mail'))->send(new appliMail($mailData));
            return true;
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
}

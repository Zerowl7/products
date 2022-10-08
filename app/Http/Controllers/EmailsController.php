<?php

namespace App\Http\Controllers;

use App\Mail\AttachmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class EmailsController extends Controller
{



    public function sendEmail(Request $req)
    {
        $data = [
            'email' => $req->email,
        ];
        Mail::to('minaevmaxim7@gmail.com')->send(new WelcomeMail($data));
        return redirect(('/'))->withSuccess('Сообщение об успехе');
            
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mail(MailRequest $request)
    {
        $contact_name = $request->contact_name;
        $contact_phone = $request->contact_phone;
        $contact_email = $request->contact_email;
        $contact_message = $request->contact_message;
        $subject = 'Cbs Contact Form';

        Mail::send('mail', ['contact_name' => $contact_name, 'contact_phone' => $contact_phone, 'contact_email' => $contact_email, 'contact_message' => $contact_message], function ($message) use ($subject) {
            $message->to("agamedov94@mail.ru")->subject($subject);
        });

        Session::flash('success', 'E-posta başarıyla gönderildi!');
        return redirect()->route('front.index');
    }
}

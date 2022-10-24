<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Mail\RegisterMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthMailController extends Controller
{
    public function sendRegisterMail()
    {

        $user = new User();
        $user->name  = 'Everton H';

        $registerMail = new RegisterMail($user);
        // return $registerMail;

        Mail::to('everton@everton.com')
        ->cc('email@gmail.com')
        ->bcc('email2@gmail.com')
        ->send($registerMail);        
    }

}

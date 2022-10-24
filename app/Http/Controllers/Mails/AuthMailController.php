<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Jobs\SendAuthMail;
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
        $user->password = '123456789';
        $user->email = '46546565hj@everton.com';

        $user->save();
        SendAuthMail::dispatch($user);
        return '<h1>O email foi enviado</h1>';
    }

}


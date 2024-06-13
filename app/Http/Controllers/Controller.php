<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

abstract class Controller
{
    public function sendTestMail()
    {
        Mail::to('recipient@example.com')->send(new TestMail());
        return 'Test email sent!';
    }
}

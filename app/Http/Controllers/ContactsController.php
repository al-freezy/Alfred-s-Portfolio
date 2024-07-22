<?php

namespace App\Http\Controllers;

use App\Mail\sendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function sendMail() {

    Mail::to('fake@gmail.com')->send(new sendMail);

        return view('sendm');
    }
}

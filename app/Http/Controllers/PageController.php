<?php

namespace App\Http\Controllers;

use App\Mail\MarkDownContactFormMail;
use App\Mail\SendContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index()
    {
        return view('guest.welcome');
    }

    public function about()
    {
        return view('guest.about');
    }

    

    
}

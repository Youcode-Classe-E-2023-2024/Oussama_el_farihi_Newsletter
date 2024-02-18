<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscriber;
use App\Models\Template;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index(){
        $subscribers = NewsletterSubscriber::all();
        $templates = Template::all();
        return view('editor.email.index', compact('subscribers', 'templates'));
    }

    public function send(Request $request){
        // Logic to send email to selected subscribers using the selected template
        // This is a placeholder for your email sending logic
    }

    

}



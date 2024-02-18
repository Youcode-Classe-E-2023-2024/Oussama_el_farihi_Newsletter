<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    // public function index(){
    //     return view('editor.index');
    // }

    public function index(){
        // Fetch all newsletter subscribers from the database
        $subscribers = NewsletterSubscriber::all();
        // Pass subscribers to the view
        return view('editor.email.index', compact('subscribers'));
    }

    

}



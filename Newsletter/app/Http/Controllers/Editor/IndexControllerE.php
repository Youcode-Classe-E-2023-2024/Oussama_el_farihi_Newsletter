<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexControllerE extends Controller
{
    public function index(){
        return view('editor.index');
    }
}

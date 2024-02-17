<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Template;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class TemplateController extends Controller
{
    

    public function index()
    {
        
        $mediaItems = Media::all();

        return view('editor.template.index', compact('mediaItems'));
    }

}

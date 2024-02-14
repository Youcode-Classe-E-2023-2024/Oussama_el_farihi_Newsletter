<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function media(Request $request)
    {
        $user = auth()->user();
    
        // Handle the upload if the request has a file.
        if ($request->hasFile('media')) {
            $user->addMediaFromRequest('media')->toMediaCollection();
            return redirect()->route('editor.media'); // Redirect to clear the POST request and show the updated media list.
        }
    
        // Retrieve all media for the user to display on the page.
        $mediaItems = $user->media;
    
        return view('editor.media.index', compact('mediaItems'));
    }
    
}

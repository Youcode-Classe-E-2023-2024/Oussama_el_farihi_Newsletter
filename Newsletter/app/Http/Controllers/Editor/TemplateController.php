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
    $templates = Template::all();
    $mediaItems = Media::all(); // Assurez-vous que ceci récupère vos médias

    return view('editor.template.index', compact('templates', 'mediaItems'));
}

public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'content' => 'required|string',
        'media_id' => 'nullable|exists:media,id',
    ]);

    $template = Template::create($data);

    if ($request->media_id) {
        // Attacher le média sélectionné au modèle
        $template->addMedia(Media::find($request->media_id)->first()->getPath())->toMediaCollection();
    }

    return back()->with('success', 'Modèle créé avec succès.');
}
}

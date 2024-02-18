<x-editor-layout>
<form method="POST" action="{{ route('editor.template.store') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Nom du modèle</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="content">Contenu HTML</label>
        <textarea id="content" name="content" required></textarea>
    </div>
    <div>
        <label for="media">Sélectionner un média</label>
        <select name="media_id" id="media">
            @foreach ($mediaItems as $media)
                <option value="{{ $media->id }}">{{ $media->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Créer le modèle</button>
</form>
@foreach ($templates as $template)
    <div>
        <h3>{{ $template->name }}</h3>
        <p>{!! $template->content !!}</p>
        @if ($media = $template->getFirstMedia())
            <img src="{{ $media->getUrl() }}" alt="Média associé">
        @endif
    </div>
@endforeach


</x-editor-layout>
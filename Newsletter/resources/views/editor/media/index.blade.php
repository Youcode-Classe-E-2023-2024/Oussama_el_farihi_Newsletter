<x-editor-layout>
<form action="{{ route('editor.media') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="media">
    <button type="submit">Upload</button>
</form>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @foreach ($mediaItems as $media)
        <img src="{{ asset('storage/' . $media->id . '/' . $media->file_name) }}" alt="Media">
        @endforeach
    </div>
</div>

</x-editor-layout>
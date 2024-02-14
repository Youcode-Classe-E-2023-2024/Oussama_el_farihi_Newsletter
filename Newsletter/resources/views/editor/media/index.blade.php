<x-editor-layout>
    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg p-5">
                <form action="{{ route('editor.media') }}" method="POST" enctype="multipart/form-data" class="mb-4">
                    @csrf
                    <div class="flex items-center space-x-4">
                        <input type="file" name="media" class="form-input rounded-md shadow-sm mt-1 block w-full">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">Upload</button>
                    </div>
                </form>
                <div class="grid grid-cols-3 gap-4">
                    @foreach ($mediaItems as $media)
                        <div class="relative">
                            <img src="{{ asset('storage/' . $media->id . '/' . $media->file_name) }}" alt="Media" class="w-full h-auto rounded-md">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 rounded-b-md">
                                <p class="text-sm text-white truncate">{{ $media->name }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-editor-layout>
<x-editor-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 space-y-8">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Créer un modèle d'email</h2>
                </div>
                <form method="POST" action="{{ route('editor.template.store') }}" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Nom du modèle :</label>
                        <input type="text" id="name" name="name" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm text-sm leading-tight text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    </div>
                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Contenu HTML :</label>
                        <textarea id="content" name="content" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm text-sm leading-tight text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white"></textarea>
                    </div>
                    <div>
                        <label for="media" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Sélectionner un média :</label>
                        <select name="media_id" id="media" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            @foreach ($mediaItems as $media)
                            <option value="{{ $media->id }}">{{ $media->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit"
                        class="w-full px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75 transition ease-in-out duration-300">
                        Créer le modèle
                    </button>
                </form>
                <div>
                    @foreach ($templates as $template)
                    <div class="mt-6 p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">{{ $template->name }}</h3>
                        <p class="text-gray-600 dark:text-gray-300 mt-2">{!! $template->content !!}</p>
                        @if ($media = $template->getFirstMedia())
                        <img src="{{ $media->getUrl() }}" alt="Média associé" class="mt-4 rounded">
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-editor-layout>

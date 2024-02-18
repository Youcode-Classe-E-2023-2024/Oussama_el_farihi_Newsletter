<x-editor-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 space-y-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Newsletter Subscribers</h2>
                    <!-- Additional button or link can go here -->
                </div>
                <form action="" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <div class="mb-4">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="p-4">
                                            <div class="flex items-center">
                                                <input id="select-all" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="select-all" class="sr-only">Select all</label>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($subscribers as $subscriber)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="w-4 p-4">
                                                <div class="flex items-center">
                                                    <input type="checkbox" name="emails[]" value="{{ $subscriber->email }}" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="emails[]" class="sr-only">Select</label>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">{{ $subscriber->email }}</td>
                                        </tr>
                                    @empty
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td colspan="2" class="px-6 py-4">No subscribers found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Send Email
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('select-all').addEventListener('change', function() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = this.checked;
            }.bind(this));
        });
    </script>
</x-editor-layout>

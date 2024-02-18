<x-editor-layout>
    <div class="container mx-auto px-4">
        <h1 class="text-xl font-bold mb-4">Newsletter Subscribers</h1>
        <form action="" method="POST">
            @csrf
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-full table-auto">
                    <thead class="justify-between">
                        <tr class="bg-gray-800">
                            <th class="px-4 py-2 text-left text-gray-300"><input type="checkbox" id="select-all"></th>
                            <th class="px-4 py-2 text-left text-gray-300">Email</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-200">
                        @forelse ($subscribers as $subscriber)
                            <tr class="bg-white border-4 border-gray-200">
                                <td class="px-4 py-2 text-left"><input type="checkbox" name="emails[]" value="{{ $subscriber->email }}"></td>
                                <td class="px-4 py-2 text-left">{{ $subscriber->email }}</td>
                            </tr>
                        @empty
                            <tr class="bg-white">
                                <td class="px-4 py-2 text-left" colspan="2">No subscribers found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 border rounded-md hover:bg-blue-700">Send Email</button>
        </form>
    </div>

    <script>
        document.getElementById('select-all').onclick = function() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            for (var checkbox of checkboxes) {
                checkbox.checked = this.checked;
            }
        }
    </script>
</x-editor-layout>

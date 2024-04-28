<x-filament-panels::page>
    <form action="{{ route('upload.file') }}" method="POST" class="flex flex-row gap-2">
        @csrf
        <input
            class="block text-lg text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            id="large_size" type="file" name="file">
        <button type="submit" class="bg-gray-400 rounded-lg px-1.5 py-1 mx-2">
            Upload
        </button>
    </form>
</x-filament-panels::page>

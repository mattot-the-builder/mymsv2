<!DOCTYPE>
<html>

<head>
    <!-- other html -->
    <title>Filepond</title>

    <link rel="stylesheet" href="{{ asset('filepond/dist/filepond.css') }}">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="p-6">

    @if (session('success'))
        <h2>{{ session('success') }}</h2>
    @else
        <h2>{{ session('error') }}</h2>
    @endif

    <form method="POST" action="/" enctype="multipart/form-data">
        @csrf

        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
            <input type="text" id="name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm" placeholder="Name">
        </div>

        <div class="mb-6">
            <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Image</label>
            <input type="file" id="front_ic" name="image"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm">
        </div>

        <div class="mb-6">
            <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Image</label>
            <input type="file" id="back_ic" name="image"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm">
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-blue-900">Upload</button>

    </form>
    <script src="{{ asset('filepond/dist/filepond.js') }}"></script>

    <script>
        const front_ic = document.querySelector('input[id="front_ic"]');
        const back_ic = document.querySelector('input[id="back_ic"]');

        // Create a FilePond instance
        const front_pond = FilePond.create(front_ic);

        const back_pond = FilePond.create(back_ic);

        FilePond.setOptions({
            server: {
                process: "/tmp-upload",
                revert: "/tmp-delete",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                },
            },
        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Language Translator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-brown-50 text-brown-800">

    <div class="max-w-4xl mx-auto p-6">
        <!-- Header Section -->
        <h6 class="text-xl font-bold text-center mb-4">SalinKamay</h1>
        <h1 class="text-3xl font-bold text-center mb-4">Filipino Sign Language Translator</h1>
        <p class="text-lg text-center mb-6">Type a letter, word, or phrase to see its Filipino sign language equivalent.</p>

        <!-- Input Form -->
        <form action="/" method="POST" class="mb-6">
            @csrf
            <div class="mb-4">
                <label for="inputText" class="block text-lg font-semibold mb-2">Enter a Letter, Word, or Phrase</label>
                <input
                    id="inputText"
                    type="text"
                    name="inputText"
                    value="{{ old('inputText', $inputText ?? '') }}"
                    placeholder="Type here..."
                    class="w-full p-3 text-lg border-2 border-brown-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-brown-500"
                />
            </div>
            <button type="submit" class="px-6 py-3 bg-brown-500 text-white rounded-lg hover:bg-brown-600">Translate</button>
        </form>

        @if ($signs->isNotEmpty())
        <div class="text-center mt-6">
            @foreach ($signs as $sign)
                <!-- Display text (letter, phrase, number, or time expression) -->
                @if ($sign->letter ?? false)
                    <h3 class="text-2xl font-semibold">{{ $sign->letter }}</h3>
                @elseif ($sign->phrase ?? false)
                    <h3 class="text-2xl font-semibold">{{ $sign->phrase }}</h3>
                @elseif ($sign->number ?? false)
                    <h3 class="text-2xl font-semibold">{{ $sign->number }}</h3>
                @elseif ($sign->time_expression ?? false)
                    <h3 class="text-2xl font-semibold">{{ $sign->time_expression }}</h3>
                @endif

                <!-- Display Image (for letters and numbers) -->
                @if ($sign->image_path ?? false)
                    <div class="mt-6">
                        <img src="{{ Storage::url($sign->image_path) }}" alt="Sign Language Image" class="max-w-full h-auto rounded-lg shadow-lg" />
                    </div>
                @endif

                <!-- Display Video (for phrases and time expressions) -->
                @if ($sign->video_path ?? false)
                    <div class="mt-6">
                        <video controls class="w-full rounded-lg shadow-lg">
                            <source src="{{ Storage::url($sign->video_path) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                @endif
            @endforeach
        </div>
    @endif



    </div>

</body>
</html>

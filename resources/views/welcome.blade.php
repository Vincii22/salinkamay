<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Language Translator</title>
        <!-- Use Tailwind CSS v3 CDN -->
        <script src="https://cdn.tailwindcss.com/"></script>
        <!-- Google Fonts: Poppins -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        <style>
            /* Custom animations for smooth transitions */
            @keyframes fadeInUp {
                0% {
                    opacity: 0;
                    transform: translateY(20px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .fade-in-up {
                animation: fadeInUp 0.6s ease-out;
            }

            body {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>

<body class="bg-amber-900 text-white"> <!-- Dark Amber background -->

    <div class="max-w-4xl mx-auto p-8">
        <!-- Header Section -->
        <div class="text-center mb-10">
            <h6 class="text-xl font-semibold text-amber-300 mb-2">Welcome to</h6>
            <h1 class="text-4xl font-bold text-white mb-4 animate__animated animate__fadeIn animate__delay-1s">SalinKamay</h1>
            <p class="text-lg text-amber-200 mb-6">Type a letter, word, or phrase to see its Filipino sign language equivalent.</p>
        </div>

        <!-- Input Form -->
        <form action="/" method="POST" class="mb-8 fade-in-up">
            @csrf
            <div class="mb-6">
                <label for="inputText" class="block text-lg font-semibold mb-2 text-amber-200">Enter a Letter, Word, or Phrase</label>
                <input
                    id="inputText"
                    type="text"
                    name="inputText"
                    value="{{ old('inputText', $inputText ?? '') }}"
                    placeholder="Type here..."
                    class="w-full p-4 text-lg border-2 border-amber-500 rounded-lg text-amber-800 focus:outline-none focus:ring-2 focus:ring-amber-400 transition-all"
                />
            </div>
            <button type="submit" class="px-8 py-3 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition-all ease-in-out">Translate</button>
        </form>

        @if ($signs->isNotEmpty())
        <div class="text-center mt-8 space-y-8">
            @foreach ($signs as $sign)
                <!-- Display text (letter, phrase, number, or time expression) -->
                <div class="fade-in-up">
                    @if ($sign->letter ?? false)
                        <h3 class="text-3xl font-semibold text-white">{{ $sign->letter }}</h3>
                    @elseif ($sign->phrase ?? false)
                        <h3 class="text-3xl font-semibold text-white">{{ $sign->phrase }}</h3>
                    @elseif ($sign->number ?? false)
                        <h3 class="text-3xl font-semibold text-white">{{ $sign->number }}</h3>
                    @elseif ($sign->food ?? false)
                        <h3 class="text-3xl font-semibold text-white">{{ $sign->food }}</h3>
                    @elseif ($sign->time_expression ?? false)
                        <h3 class="text-3xl font-semibold text-white">{{ $sign->time_expression }}</h3>
                    @endif
                </div>

                <!-- Display Image (for letters and numbers) -->
                @if ($sign->image_path ?? false)
                    <div class="mt-6 fade-in-up border-4 border-amber-600 p-4 rounded-lg shadow-lg bg-white">
                        <img src="{{ Storage::url($sign->image_path) }}" alt="Sign Language Image" class="max-w-full h-auto rounded-lg transform transition-all duration-500 hover:scale-105" />
                    </div>
                @endif

                <!-- Display Video (for phrases and time expressions) -->
                @if ($sign->video_path ?? false)
                    <div class="mt-6 fade-in-up border-4 border-amber-600 p-4 rounded-lg shadow-lg bg-white">
                        <video controls class="w-full rounded-lg transform transition-all duration-500 hover:scale-105">
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

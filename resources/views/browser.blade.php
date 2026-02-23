<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Browser Issue</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.output.css') }}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('assets/js/init-alpine.js') }}"></script>
</head>

<body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            {{-- <div class="flex flex-col overflow-y-auto md:flex-row"> --}}

            <div class="flex items-center justify-center  sm:p-12">
                <div class="w-full">
                    <h1 class="mb-4 text-xl font-semibold text-center text-gray-700 dark:text-gray-200">
                        Browser Tidak Mendukung
                    </h1>
                    <label class="block text-sm text-center">
                        <span class="text-gray-700 dark:text-gray-400">Silahkan menggunakan google chrome atau
                            edge</span>

                    </label>

                    <!-- You should use a button here, as the anchor is only used for the example  -->
                    <a class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue"
                        href="{{ route('home') }}">
                        Back
                    </a>
                </div>
            </div>
        </div>
        {{-- </div> --}}
    </div>
</body>

</html>

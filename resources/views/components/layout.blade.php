<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Quiz</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <link rel="stylesheet" type="text/css" href="{{ url('/app.css') }}" />
        <script src="https://kit.fontawesome.com/19ab508515.js" crossorigin="anonymous"></script>
    </head>

    <body class="bg-black text-white">
        <header class="bg-gray-800 py-6">
            <nav>
                <div class="flex items-center">
                    <ul class="flex">
                        <li class="hover:underline mx-8 target:font-bold"><a href="/">Home</a></li>
                        <li class="hover:underline mr-8"><a href="/categories">Categories</a></li>
                        <li class="hover:underline mr-8"><a href="/questions">Questions</a></li>
                        <li class="hover:underline mr-8"><a href="/answers">Answers</a></li>
                        <li class="hover:underline mr-8"><a href="/users">Users</a></li>
                        <li class="hover:underline mr-8"><a href="/quizzes">Quizzes</a></li>
                        <li class="hover:underline"><a href="/play">Play</a></li>
                        <li class="hover:underline ml-24"><a href="/form">Form</a></li>

                    </ul>
                </div>
            </nav>
        </header>
        <div class="min-h-screen">
            {{ $slot }}
        </div>
    </body>
</html>
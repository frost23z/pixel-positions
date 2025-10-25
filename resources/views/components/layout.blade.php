<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">
</head>
<body class="bg-black text-white">
<div class="px-10">
    <header>
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="">
                    <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="Pixel Positions Logo"/>
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="">Browse Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Resources</a>
            </div>
            <div>Post a job</div>
        </nav>
    </header>
    <main class="my-10 max-w-4xl mx-auto">
        {{ $slot }}
    </main>
</div>
</body>
</html>

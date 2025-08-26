<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 12</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="max-w-7xl mx-auto p-4">
        {{-- <h1>Welcome to my Laravel 12 Application</h1> --}}
        <x-alert>
            <x-slot name="dark">
                Info alert!
            </x-slot>
            asdf
        </x-alert>
    </div>
</body>
</html>
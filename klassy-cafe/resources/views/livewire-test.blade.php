<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Livewire - {{ config('app.name') }}</title>

  @vite('resources/css/app.css')
  
  @livewireStyles
</head>
<body>
  <h1 class="font-semibold text-5xl text-center bg-slate-200 py-5 dark:bg-slate-700 dark:text-gray-200">Hello World</h1>

  @livewireScripts
</body>
</html>
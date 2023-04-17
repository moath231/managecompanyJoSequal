<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ env('APP_NAME') }}</title>
   <script src="{{ asset('js/app.js') }}" defer></script>
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link href="{{ asset('css/main.css') }}" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
   <title>company</title>
</head>

<header class="bg-white p-6 rounded-t-lg shadow-md">
   @include('components.navbar')
</header>

<body class="relative">

   <main class="p-6 flex-1 min-h-screen">
      {{ $slot }}
   </main>


   @include('components.footer')
</body>

</html>

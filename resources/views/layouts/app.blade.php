<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <title>Live Hello</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <livewire:styles />
</head>

<body>

  <div class="flex w-full justify-between text-white bg-black py-2" id="app">
    <div class="py-3">
      <a href="/" class="shadow px-2 py-3 hover:underline">Home</a>
    </div>

    @auth
      <livewire:logout />
    @endauth

    @guest
      <div class="py-3">
        <a href="/login" class="px-2 hover:underline">Login</a>
        <a href="/register" class="px-2 hover:underline">Register</a>
      </div>
    @endguest
  </div>

  <div class="flex justify-center">
    <div class="w-10/12 my-10 flex">
      {{ $slot }}
    </div>
  </div>


  <livewire:scripts />


  <script type="module">
    import hotwiredTurbo from 'https://cdn.skypack.dev/@hotwired/turbo';
  </script>

  <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
    data-turbolinks-eval="false" data-turbo-eval="false"></script>
</body>

</html>

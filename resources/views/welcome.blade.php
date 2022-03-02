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
  <div class="flex justify-center">
    <div class="w-10/12 my-10 flex">
      <div class="w-5/12 rounded border p-2">
        <livewire:tickets />
      </div>
      <div class="w-7/12 mx-2 rounded border p-2">
        <livewire:comments />
      </div>
    </div>
  </div>


  <livewire:scripts />
</body>

</html>

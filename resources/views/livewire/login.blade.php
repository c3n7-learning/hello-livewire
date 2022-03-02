<div class="w-full flex justify-center">
  <div class="w-4/12 mx-2 rounded border p-2 px-4">
    <form class="my-4 flex flex-wrap" wire:submit.prevent="submit">
      <h1 class="mt-4 mb-2 text-3xl">Log In</h1>

      @error('form.email')
        <div class="w-full text-red-500 text-xs">{{ $message }}</div>
      @enderror
      <input type="email" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="Email"
        wire:model.debounce.500ms="form.email">
      @error('form.password')
        <div class="w-full text-red-500 text-xs">{{ $message }}</div>
      @enderror
      <input type="password" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="Password"
        wire:model.debounce.500ms="form.password">

      <div class="pt-2 w-full">
        <button type="submit" class="p-2 bg-blue-500 rounded shadow text-white w-full text-center">
          Log In
        </button>
      </div>
    </form>
  </div>
</div>

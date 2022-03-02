<div class="w-full flex justify-center">
  <div class="w-4/12 mx-2 rounded border p-2 px-4">
    <form class="my-4 flex flex-wrap" wire:submit.prevent="submit">
      <h1 class="mt-4 mb-2 text-3xl">Sign Up</h1>
      <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="Name">
      <input type="email" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="Email">
      <input type="password" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="Password">
      <input type="password" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="Confirm Password">

      <div class="pt-2 w-full">
        <button type="submit" class="p-2 bg-blue-500 rounded shadow text-white w-full text-center">
          Register
        </button>
      </div>
    </form>
  </div>
</div>

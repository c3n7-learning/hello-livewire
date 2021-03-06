<div>
  <div>
    <div class="p-3">
      <h1 class="my-10 text-3xl">Comments</h1>
      <div>
        @if (session()->has('message'))
          <div class="p-3 bg-green-300 text-green-800 rounded shadow-sm">
            {{ session('message') }}
          </div>
        @endif
      </div>

      <div>

        @error('image')
          <div class="text-red-500 text-xs">{{ $message }}</div>
        @enderror
        @if ($image)
          <div>
            Photo Preview:
            <img src="{{ $image->temporaryUrl() }}" class="h-56">
          </div>
        @endif
        <div wire:loading wire:target="image">Uploading...</div>
        <input type="file" wire:model="image" id="iteration{{ $iteration }}" />
      </div>

      @error('newComment')
        <span class="text-red-500 text-xs">{{ $message }}</span>
      @enderror
      <form class="my-4 flex" wire:submit.prevent="addComment">
        <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" placehodler="What's in your mind."
          wire:model.debounce.500ms="newComment">

        <div class="py-2">
          <button type="submit" class="p-2 bg-blue-500 w-20 rounded shadow text-white">Add</button>
        </div>
      </form>
      @foreach ($comments as $comment)
        <div class="rounded border shadow p-3 my-2">
          <div class="flex justify-between my-2">
            <div>
              <p class="font-bold text-lg">{{ $comment->creator->name }}</p>
              <p class="mx-3 py-1 text-xs text-gray-500 font-semibold">{{ $comment->created_at->diffForHumans() }}</p>
            </div>
            <i class="fas fa-times text-red-200 hover:text-red-600 cursor-pointer"
              wire:click="remove({{ $comment->id }})"></i>
          </div>
          <p class="text-gray-800">
            {{ $comment->body }} </p>
          @if ($comment->image)
            <img src="{{ $comment->image }}" class="h-56" />
          @endif
        </div>
      @endforeach

      {{ $comments->links('pagination-links') }}
    </div>
  </div>
</div>

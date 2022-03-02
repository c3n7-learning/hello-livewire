<div class="p-3">
  <h1 class="my-10 text-3xl">Tickets</h1>
  @foreach ($tickets as $ticket)
    <div class="rounded border shadow p-3 my-2">
      <div class="flex justify-between my-2">
        <div>
          {{-- <p class="font-bold text-lg">{{ $comment->creator->name }}</p> --}}
          <p class="mx-3 py-1 text-xs text-gray-500 font-semibold">{{ $ticket->created_at->diffForHumans() }}</p>
        </div>
        {{-- <i class="fas fa-times text-red-200 hover:text-red-600 cursor-pointer"
          wire:click="remove({{ $comment->id }})"></i> --}}
      </div>
      <p class="text-gray-800">
        {{ $ticket->question }} </p>
    </div>
  @endforeach
</div>

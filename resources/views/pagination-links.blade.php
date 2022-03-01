<div>
  @if ($paginator->hasPages())
    <ul class="flex justify-between">
      @if ($paginator->onFirstPage())
        <li class="px-2 py-1 text-center rounded border bg-gray-100">Prev</li>
      @else
        <li class="px-2 py-1 text-center rounded border shadow bg-white cursor-pointer" wire:click="previousPage">Prev
        </li>
      @endif

      @foreach ($elements as $element)
        <div class="flex">
          @if (is_array($element))
            @foreach ($element as $page => $url)
              @if ($page == $paginator->currentPage())
                <li class="mx-2 px-2 py-1 text-center rounded border bg-gray-100">{{ $page }}</li>
              @else
                <li class="mx-2 px-2 py-1 text-center rounded border bg-white cursor-pointer"
                  wire:click="gotoPage({{ $page }})">{{ $page }}</li>
              @endif
            @endforeach
          @endif
        </div>
      @endforeach

      @if ($paginator->hasMorePages())
        <li class="px-2 py-1 text-center rounded border shadow bg-white cursor-pointer" wire:click="nextPage">Next</li>
      @else
        <li class="px-2 py-1 text-center rounded border bg-gray-100">Next</li>
      @endif
    </ul>
  @endif
</div>

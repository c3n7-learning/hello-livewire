<?php

namespace App\Http\Livewire;

use App\Models\SupportTicket;
use Livewire\Component;

class Tickets extends Component
{
  public function render()
  {
    return view('livewire.tickets', [
      // ::with('creator')->
      'tickets' => SupportTicket::orderBy('created_at', 'desc')->get()
    ]);
  }
}

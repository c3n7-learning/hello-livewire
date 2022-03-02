<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
  public $form = [
    'email' => '',
    'password' => '',
  ];

  public function submit()
  {
    $this->validate([
      'form.email' => 'required|email',
      'form.password' => 'required',
    ]);
    // dd('here');
    if (Auth::attempt($this->form)) {
      return redirect()->route('home', 303);
    }

    return back()->withErrors([
      'form.email' => 'The provided credentials do not match our records.',
    ]);
  }

  public function render()
  {
    return view('livewire.login');
  }
}

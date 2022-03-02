<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Register extends Component
{
  public $name, $email, $password, $password2;
  public $form = [
    'name' => '',
    'email' => '',
    'password' => '',
    'password_confirmation' => '',
  ];

  public function submit()
  {
    $this->validate([
      'form.email' => 'required|email',
      'form.name' => 'required',
      'form.password' => 'required|confirmed',
    ]);
    dd($this->form);
  }

  public function render()
  {
    return view('livewire.register');
  }
}

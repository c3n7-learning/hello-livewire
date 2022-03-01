<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
  public $comments;

  public $newComment;

  public function render()
  {
    return view('livewire.comments');
  }


  public function mount()
  {
    // $this->comments = Comment::all();
    $this->comments = Comment::with('creator')->orderBy('created_at', 'desc')->get();
  }


  public function addComment()
  {


    if ($this->newComment == "") return;

    $newComment = Comment::create(['body' => $this->newComment, 'user_id' => 1]);
    $this->comments->prepend($newComment);

    $this->newComment = "";
  }
}

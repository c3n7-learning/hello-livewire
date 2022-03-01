<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
  public $comments;
  public $validate;

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

  protected $rules =
  [
    'newComment' => 'required|max:255',
  ];


  public function updated($newComment)
  {
    $this->validateOnly($newComment);
  }

  public function addComment()
  {
    $this->validate();


    $newComment = Comment::create(['body' => $this->newComment, 'user_id' => 1]);
    $this->comments->prepend($newComment);

    $this->newComment = "";

    session()->flash('message', 'Comment added successfully');
  }

  public function remove($commentId)
  {
    $comment = Comment::find($commentId);

    $comment->delete();

    $this->comments = $this->comments->except($commentId);
    session()->flash('message', 'Comment deleted successfully');
  }
}

<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Comments extends Component
{
  use WithPagination, WithFileUploads;

  public $validate;

  public $newComment;
  public $image;

  public function render()
  {
    return view('livewire.comments', [
      'comments' => Comment::with('creator')->orderBy('created_at', 'desc')->paginate(2)
    ]);
  }


  protected $rules =
  [
    'newComment' => 'required|max:255',
    'image' => 'image|max:1024',
  ];


  public function updated($newComment)
  {
    $this->validateOnly($newComment);
  }

  public function addComment()
  {
    $this->validate();


    Comment::create(['body' => $this->newComment, 'user_id' => 1]);
    $this->image->store('photos');

    $this->newComment = "";

    session()->flash('message', 'Comment added successfully');
  }

  public function remove($commentId)
  {
    $comment = Comment::find($commentId);

    $comment->delete();

    session()->flash('message', 'Comment deleted successfully');
  }
}

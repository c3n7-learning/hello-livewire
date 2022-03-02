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
  public $ticketId = 1;
  public $image;
  public $iteration = 1;

  public function render()
  {
    return view('livewire.comments', [
      'comments' => Comment::with('creator')->orderBy('created_at', 'desc')->paginate(2)
    ]);
  }


  protected $rules =
  [
    'newComment' => 'required|max:255',
    'image' => 'nullable|image|max:1024',
  ];


  public function updated($newComment)
  {
    $this->validateOnly($newComment,  [
      'newComment' => 'required|max:255',
      'image' => 'nullable|sometimes|image|max:1024',
    ]);
  }

  public function addComment()
  {
    $this->validate();

    $path = null;
    if ($this->image != null) {
      $path = $this->image->store('photos');
    }

    Comment::create([
      'body' => $this->newComment,
      'user_id' => 1,
      'image' => $path,
      'support_ticket_id' => $this->ticketId
    ]);

    $this->newComment = "";
    $this->image = null;
    $this->iteration++;

    session()->flash('message', 'Comment added successfully');
  }

  public function remove($commentId)
  {
    $comment = Comment::find($commentId);

    $comment->delete();

    session()->flash('message', 'Comment deleted successfully');
  }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
  public $comments = [
    [
      'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, dicta nihil ducimus quos assumenda alias
  impedit veritatis similique, dolor, aut maiores id earum aspernatur ipsum eum. Ipsa debitis aliquam aperiam?",
      'created_at' => "3 min ago",
      'creator' => "John"
    ],
    [
      'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, dicta nihil ducimus quos assumenda alias
  impedit veritatis similique, dolor, aut maiores id earum aspernatur ipsum eum. Ipsa debitis aliquam aperiam?",
      'created_at' => "5 min ago",
      'creator' => "Jane"
    ]
  ];

  public function render()
  {
    return view('livewire.comments');
  }


  public function addComment()
  {
    array_unshift($this->comments, [
      'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, dicta nihil ducimus quos assumenda alias
  impedit veritatis similique, dolor, aut maiores id earum aspernatur ipsum eum. Ipsa debitis aliquam aperiam?",
      'created_at' => "5 min ago",
      'creator' => "Jane"
    ]);
  }
}

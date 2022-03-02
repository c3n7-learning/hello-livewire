<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  use HasFactory;

  public $fillable = [
    'body',
    'image',
    'user_id',
    'support_ticket_id',
  ];

  public function creator()
  {
    return  $this->belongsTo(User::class, 'user_id');
  }
}

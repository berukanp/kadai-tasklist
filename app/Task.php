<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   protected $fillable = ['content', 'task_id'];

    public function user()
    {
        return $this->belongsTo(Task::class);
    }
}

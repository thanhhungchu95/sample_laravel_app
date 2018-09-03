<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $guarded = ['id'];

    protected $fillable = [
        'title',
        'content',
        'status',
        'user_id',
        'slug',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

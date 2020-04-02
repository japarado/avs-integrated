<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Candidate extends Model
{
    protected $table = 'candidate';

    protected $fillable = [
        'name',
        'desc',
        'image',
        'position_id',
        'strand_id'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'candidate_user', 'candidate_id', 'user_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{


    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function upVotes()
    {
        return $this->votes->where('up', true);
    }
    public function upVotesNumber()
    {
        return $this->upVotes()->count();
    }

    public function downVotes()
    {
        return $this->votes->where('up', false);
    }
    public function downVotesNumber()
    {
        return $this->downVotes()->count();
    }
}
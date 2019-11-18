<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public $timestamps = false;

    public function idea()
    {
        return $this->belongsTo(App\Idea::class, 'ideaId');
    }


    //Methods

    static function upVote(User $user, Idea $idea)
    {
        $vote = new Vote;
        $vote->user_id = $user->id;
        $vote->idea_id = $idea->id;
        $vote->up = true;
        $vote->save();
    }

    static function downVote(User $user, Idea $idea)
    {
        $vote = new Vote;
        $vote->user_id = $user->id;
        $vote->idea_id = $idea->id;
        $vote->up = false;
        $vote->save();
    }
}
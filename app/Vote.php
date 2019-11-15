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

    public function upVote(App\User $user, App\Event $event)
    {
        $vote = new Vote;
        $vote->user_id = $user->id;
        $vote->idea_id = $event->id;
        $vote->up = true;
        $vote->save();
    }

    public function downVote(App\User $user, App\Event $event)
    {
        $vote = new Vote;
        $vote->user_id = $user->id;
        $vote->idea_id = $event->id;
        $vote->up = false;
        $vote->save();
    }
}
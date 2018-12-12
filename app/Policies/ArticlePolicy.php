<?php

namespace App\Policies;

use App\User;
use App\Article;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlePolicy
{
    use HandlesAuthorization;

    public function manage(User $user, Article $article)
    {
        return $article->author_id == $user->id;
    }
}

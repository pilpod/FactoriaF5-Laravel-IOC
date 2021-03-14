<?php 

namespace App\Repositories;

use App\Repositories\Contracts\IArticleRepository;
use App\Models\Article;
use App\Models\User;

class ArticleRepository extends BaseRepository implements IArticleRepository {


    public function __construct()
    {
        $this->model = new Article;
    }

    

}

?>
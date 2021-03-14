<?php 

namespace  App\Repositories;

use App\Repositories\Contracts\IArticleRepository;
use App\Models\Article;

class BaseRepository {

    protected $model;

    public function list()
    {
        return $this->model->get();
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

}

?>
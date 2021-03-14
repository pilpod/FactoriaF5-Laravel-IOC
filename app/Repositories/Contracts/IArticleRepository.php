<?php 

namespace App\Repositories\Contracts;


interface IArticleRepository {

    public function list();
    public function getById($id);

}

?>
<?php

require __DIR__ . '/Db.php';

class News
{
    public function getAllArticles()
    {
        $db = new Db();
        return $data = $db->query('SELECT * FROM News');
    }

    public function getOneArticle($id)
    {
        $db = new Db();
        return $data = $db->query('SELECT * FROM News WHERE id=:id', [':id' => $id]);
        //var_dump($data);
    }
}
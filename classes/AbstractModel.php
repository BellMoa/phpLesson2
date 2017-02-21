<?php

/**
 * Created by PhpStorm.
 * User: genjo
 * Date: 2/21/17
 * Time: 9:58 AM
 */
abstract class AbstractModel
{

    protected $table;
    protected $className;

    public function getAll()
    {
        $db = new DB();
        $sql = 'SELECT * FROM'.static::$table;
        return $db->queryAll($sql,static::$className);
    }

    public function getOne($id)
    {
        $db = new DB();
        $sql ='SELECT * FROM'.static::$table.'WHERE id='.$id;
        return $db->queryOne($sql,static::$className);
    }
}
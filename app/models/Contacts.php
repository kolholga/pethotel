<?php


namespace app\models;


use system\core\Model;

class Contacts extends Model
{

    public $table = 'feedback';

    /**
     * @param $arr
     * @return bool
     * добавление комментариев в БД
     */
    public function addFeedback($arr)
    {
        $sql = "INSERT INTO `feedback` SET `name` = ?, `message` = ?, `subject` = ?, `email` = ?, `date` = NOW()";
        return $this->db->exec(
            $sql,
            [
                $arr['name'],
                $arr['message'],
                $arr['subject'],
                $arr['email']
            ]
        );
    }

}
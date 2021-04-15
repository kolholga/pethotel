<?php


namespace app\models;


use system\core\Model;

class Services extends Model
{

    public $table = 'services';

    public function getServiceById($serviceId)
    {
        $sql = "SELECT * FROM {$this->table} WHERE `id` = ?";
        return $this->db->query($sql, [$serviceId]);
    }

    public function addServices($arr)
    {
        $sql = "INSERT INTO `services` SET `title` = ?, `description` = ?, `shot_description` = ?, `image` = '/img/service/service_icon_3.png' ";
        return $this->db->exec(
            $sql,
            [
                $arr['title'],
                $arr['description'],
                $arr['shot_description']
            ]
        );
    }

}
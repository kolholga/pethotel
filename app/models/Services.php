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

}
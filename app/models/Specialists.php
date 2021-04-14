<?php


namespace app\models;


use system\core\Model;

class Specialists extends Model
{

    public $table = 'specialists';

    public function getSpecialistsById($specialistId)
    {
        $sql = "SELECT * FROM {$this->table} WHERE `id` = ?";
        return $this->db->query($sql, [$specialistId]);
    }

}
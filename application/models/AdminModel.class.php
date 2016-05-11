<?php
/**
 * Created by PhpStorm.
 * User: mayingbing
 * Date: 16/5/11
 * Time: 13:05
 */
class AdminModel extends Model{

    public function getCats(){
      $sql = "SELECT *FROM {$this->table}";
        return $this->db->getAll($sql);
    }

}
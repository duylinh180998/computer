<?php
require_once 'models/Model.php';
class Order extends Model{
    public function getAll(){
        $sql_get_all="Select * from oder  ORDER BY id_oder DESC LIMIT {$this->startpoint},{$this->per_page}";
        $obj_get_all=$this->connection->prepare($sql_get_all);
        $obj_get_all->execute();
        $oders=$obj_get_all->fetchAll(PDO::FETCH_ASSOC);
        return $oders;
    }
}

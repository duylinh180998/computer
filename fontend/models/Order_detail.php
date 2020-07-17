<?php
require_once 'models/Model.php';
class Order_detail extends Model{
    public $id_order;
    public $id_computer;
    public $id_ram;
    public $id_harddrive;
    public $quality;
    public function insert(){
        $sql_insert="INSERT INTO oder_details(`id_oder`,`id_computer`,`id_ram`,`id_harddrive`,`quality`) VALUES (:id_oder,:id_computer,:id_ram,:id_harddrive,:quality)";
        $obj_insert=$this->connection->prepare($sql_insert);
        $arr_insert=[
            ':id_oder'=>$this->id_order,
            ':id_computer'=>$this->id_computer,
            ':id_ram'=>$this->id_ram,
            ':id_harddrive'=>$this->id_harddrive,
            ':quality'=>$this->quality,
        ];
        return $obj_insert->execute($arr_insert);
    }
}

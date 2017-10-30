<?php
class VehicleManager
{
    private $db; // Instance de PDO
    public function __construct($db)
    {
        $this->setDb($db);
    }
    // setter //
    public function setDb(PDO $db)
    {
        $this->db = $db;
    }

    public function getList()
    {
        $q=$this->db->query("SELECT * FROM Vehicle");
        return $q->fetchAll(PDO::FETCH_OBJ);
    }

    public function delete($id)
    {
        $q=$this->db->prepare("DELETE from Vehicle where id=:id");
        $q->bindValue(':id', $id);
        $q->execute();
    }

    public function get($id)
    {
        $q=$this->db->prepare("SELECT * from Vehicle where id=:id");
        $q->bindValue(':id', $id);
        $q->execute();

        return $q->fetch(PDO::FETCH_OBJ);
        // return $q->fetch(PDO::FETCH_CLASS|PDO::FETCH_CLASSTYPE);
    }

    public function add($vehicle)
    {
        $q=$this->db->prepare("INSERT INTO Vehicle set name=:name , brand = :brand , type=:type , color=:color , create_date=:createdate , door=:door , helmet = :helmet , max_speed=:speed");

        $q->bindValue(':name', $vehicle->getName());
        $q->bindValue(':brand', $vehicle->getBrand());
        $q->bindValue(':type', $vehicle->getType());
        $q->bindValue(':color', $vehicle->getColor());
        $q->bindValue(':createdate', $vehicle->getCreateDate());

        if ($vehicle->getType()=='car') {
            $q->bindValue(':door', $vehicle->getDoor());
        } else {
            $q->bindValue(':door', null);
        }

        if ($vehicle->getType()=='bike') {
            $a = ($vehicle->getHelmet()) ? 1 : 0;
            $q->bindValue(':helmet', $a);
        } else {
            $q->bindValue(':helmet', null);
        }

        if ($vehicle->getType()=='truck') {
            $q->bindValue(':speed', $vehicle->getMaxSpeed());
        } else {
            $q->bindValue(':speed', null);
        }

        $q->execute();
    }

    public function update($vehicle)
    {
        $q=$this->db->prepare("UPDATE Vehicle set name=:name , brand = :brand , type=:type , color=:color , door=:door , helmet = :helmet , max_speed=:speed where id=:id");

        $q->bindValue(':name', $vehicle->getName());
        $q->bindValue(':brand', $vehicle->getBrand());
        $q->bindValue(':type', $vehicle->getType());
        $q->bindValue(':color', $vehicle->getColor());
        $q->bindValue(':id', $vehicle->getId());

        if ($vehicle->getType()=='car') {
            $q->bindValue(':door', $vehicle->getDoor());
        } else {
            $q->bindValue(':door', null);
        }

        if ($vehicle->getType()=='bike') {
            $a = ($vehicle->getHelmet()) ? 1 : 0;
            $q->bindValue(':helmet', $a);
        } else {
            $q->bindValue(':helmet', null);
        }

        if ($vehicle->getType()=='truck') {
            $q->bindValue(':speed', $vehicle->getMaxSpeed());
        } else {
            $q->bindValue(':speed', null);
        }

        $q->execute();
    }
}

<?php
class VehicleManager {
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

  public function getList(){
    $q=$this->db->query("SELECT * FROM Vehicle");
    return $q->fetchAll(PDO::FETCH_OBJ);
  }


}

 ?>

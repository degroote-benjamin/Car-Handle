<?php
class car extends vehicle {

  private $door;

  const door=[3,5];

    /**
     * Get the value of Door
     *
     * @return int
     */
    public function getDoor()
    {
        return $this->door;
    }

    /**
     * Set the value of Door
     *
     * @param int door
     *
     */
    public function setDoor(int $door)
    {
      if(in_array($door,self::door)){
        $this->door = $door;
      }
    }
    /**
     * Set the value of Type
     *
     */
    public static function setType()
    {
            $this->type = vehicle::type[0];
    }

}


 ?>

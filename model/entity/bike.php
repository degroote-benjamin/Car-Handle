<?php
class bike extends vehicle
{
    private $helmet;
    const brand = ["Suzuki","Yamaha"];

    const helmet = [true,false];

    /**
     * Get the value of Helmet
     *
     * @return bool
     */
    public function getHelmet()
    {
        return $this->helmet;
    }

    /**
     * Set the value of Helmet
     *
     * @param bool helmet
     *
     */
    public function setHelmet(bool $helmet)
    {
      if(in_array($helmet,self::helmet)){
        $this->helmet = $helmet;
      }
    }

}

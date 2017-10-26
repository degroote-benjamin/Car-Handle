<?php
class bike extends vehicle
{
    private $helmet;

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

    /**
     * Set the value of Type
     *
     */
    public static function setType()
    {
        $this->type = vehicle::type[2];
    }
}

<?php
class bike extends vehicle
{
    protected $helmet;
    const brand = ["Suzuki","Yamaha"];

    const helmet = [1,0];

    /**
     * Get the value of Helmet
     *
     * @return bool
     */
    public function getHelmet()
    {
        return (bool) $this->helmet;
    }

    /**
     * Set the value of Helmet
     *
     * @param bool helmet
     *
     */
    public function setHelmet($helmet)
    {
      if(in_array($helmet,self::helmet)){
        $this->helmet = $helmet;
      }
    }



}

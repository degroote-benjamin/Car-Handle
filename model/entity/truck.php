<?php
class truck extends vehicle
{
    private $max_speed;

    const speed = [70,90,100,110,120];

    /**
     * Get the value of Max Speed
     *
     * @return int
     */
    public function getMaxSpeed()
    {
        return $this->max_speed;
    }

    /**
     * Set the value of Max Speed
     *
     * @param int max_speed
     *
     */
    public function setMaxspeed(int $max_speed)
    {
        if (in_array($max_speed, self::speed)) {
            $this->max_speed = $max_speed;
        }
    }

    /**
     * Set the value of Type
     *
     */
    public static function setType()
    {
            $this->type = vehicle::type[1];
    }
}

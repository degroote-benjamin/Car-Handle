<?php
abstract class vehicle
{
    protected $brand;
    protected $name ;
    protected $type ;
    protected $color ;
    protected $create_date;

    const type = ["car","truck","bike"];
    const color = ["blue","white","red"];
    const brand = ["BMW","Ford","Renaud","Yamaha"];

    /**
     * @param array $donnees
     */
    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    /**
     * @param  array  $donnees
     */
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
    /**
     * Get the value of Brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of Brand
     *
     * @param string brand
     *
     */
    public function setBrand(string $brand)
    {
        if (in_array($brand, self::brand)) {
            $this->brand = $brand;
        }
    }

    /**
     * Get the value of Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param string name
     *
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of Type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * Get the value of Color
     *
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of Color
     *
     * @param string color
     *
     */
    public function setColor(string $color)
    {
        if (in_array($color, self::color)) {
            $this->color = $color;
        }
    }

    /**
     * Get the value of Create Date
     *
     * @return date
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * Set the value of Create Date
     *
     * @param date create_date
     *
     */
    public function setCreateDate($create_date)
    {
        $this->create_date = $create_date;
    }
}

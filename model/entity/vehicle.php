<?php
abstract class vehicle
{
    protected $brand;
    protected $name ;
    protected $type ;
    protected $color ;
    protected $create_date;
    protected $id;

    const type = ["car","truck","bike"];
    const color = ["blue","white","red"];

    /**
     * @param array $donnees
     */
    public function __construct($donnees)
    {
        $this->hydrate($donnees);
    }

    /**
     * @param  array  $donnees
     */
    public function hydrate($donnees)
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
    public function setBrand($brand)
    {
        if (in_array($brand, static::brand)) {
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
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Set the value of Type
     *
     * @param string type
     *
     */
    public function setType($type)
    {
        $this->type = $type;
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
    public function setColor($color)
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

    /**
     * Get the value of Id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param int id
     *
     */
    public function setId($id)
    {
        $this->id = $id;
    }

}

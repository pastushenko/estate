<?php
namespace Estate\UiBundle\Entity;

class District
{
    /** @var int */
    private $id;
    /** @var string */
    private $name;
    /** @var Region */
    private $region;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Region
     */
    public function getRegion()
    {
        return $this->region;
    }
}

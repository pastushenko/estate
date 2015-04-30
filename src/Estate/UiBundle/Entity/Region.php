<?php
namespace Estate\UiBundle\Entity;

class Region
{
    /** @var int */
    private $id;
    /** @var string */
    private $name;

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
}

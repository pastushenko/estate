<?php
namespace Estate\UiBundle\Entity;

class FlatDescription
{
    const HOUSE_TYPE_MONOLIT = 1;
    const HOUSE_TYPE_PANEL = 2;
    const HOUSE_TYPE_BLOCK = 3;
    const HOUSE_TYPE_BRICK = 4;
    const HOUSE_TYPE_PANEL_BLOCK = 5;
    const HOUSE_TYPE_MONOLIT_BRICK = 6;
    const HOUSE_TYPE_STALIN = 7;
    const HOUSE_TYPE_HRUSCHEV = 8;
    const HOUSE_TYPE_OTHER = 9;
    /** @var [] */
    private $allowedHouseTypes = [
        self::HOUSE_TYPE_MONOLIT => 'Монолитный',
        self::HOUSE_TYPE_PANEL => 'Панельный',
        self::HOUSE_TYPE_BLOCK => 'Блочный',
        self::HOUSE_TYPE_BRICK => 'Кирпичный',
        self::HOUSE_TYPE_PANEL_BLOCK => 'Панельно-блочный',
        self::HOUSE_TYPE_MONOLIT_BRICK => 'Монолитно-кирпичный',
        self::HOUSE_TYPE_STALIN => 'Сталинка',
        self::HOUSE_TYPE_HRUSCHEV => 'Хрущевка',
        self::HOUSE_TYPE_OTHER => 'другое'
    ];

    /** @var int */
    private $id;
    /** @var Estate */
    private $estate;
    /** @var string */
    private $title;
    /** @var string */
    private $description;
    /** @var int */
    private $roomsCount;
    /** @var float */
    private $totalArea;
    /** @var float */
    private $livingArea = 0;
    /** @var float */
    private $kitchenArea = 0;
    /** @var string */
    private $eachRoomArea = 0;
    /** @var int */
    private $floor;
    /** @var int */
    private $floorsCount;
    /** @var int */
    private $houseType;

    /**
     * @return int
     */
    public function getHouseType()
    {
        return $this->houseType;
    }

    /**
     * @param int $houseType
     * @throws \Exception
     */
    public function setHouseType($houseType)
    {
        if (!array_key_exists($houseType, $this->allowedHouseTypes)) {
            throw new \Exception(sprintf('Flat type "%s" is not allowed.', $houseType));
        }
        $this->houseType = $houseType;
    }
}

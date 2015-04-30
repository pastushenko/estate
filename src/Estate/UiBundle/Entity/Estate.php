<?php
namespace Estate\UiBundle\Entity;

class Estate
{
    const ESTATE_TYPE_FLATS_ROOMS_NEW_BUILDINGS = 1;
    const ESTATE_TYPE_HOUSES_AREAS = 2;
    const ESTATE_TYPE_COMMERCE = 3;
    const ESTATE_TYPE_GARAGE = 4;
    /** @var [] */
    private $allowedEstateTypes = [
        self::ESTATE_TYPE_FLATS_ROOMS_NEW_BUILDINGS => 'Квартиры, комнаты, новостройки',
        self::ESTATE_TYPE_HOUSES_AREAS => 'Дома, участки, коттеджные поселки',
        self::ESTATE_TYPE_COMMERCE => 'Коммерция',
        self::ESTATE_TYPE_GARAGE => 'Гаражи, машиноместа',
    ];

    const ESTATE_SUB_TYPE_FLAT = 1;
    const ESTATE_SUB_TYPE_ROOM = 2;
    const ESTATE_SUB_TYPE_HOUSE = 3;
    const ESTATE_SUB_TYPE_AREA = 4;
    const ESTATE_SUB_TYPE_OFFICE = 5;
    const ESTATE_SUB_TYPE_WAREHOUSE = 6;
    const ESTATE_SUB_TYPE_COMMERCIAL_PLACE = 7;
    const ESTATE_SUB_TYPE_PRODUCTION = 8;
    const ESTATE_SUB_TYPE_CAFE_BAR_RESTAURANT = 9;
    const ESTATE_SUB_TYPE_PLACE_FREE_USE = 10;
    const ESTATE_SUB_TYPE_GARAGE = 11;
    const ESTATE_SUB_TYPE_PARKING_PLACE = 12;
    /** @var [] */
    private $estateSubTypesDependencies = [
        self::ESTATE_SUB_TYPE_FLAT => self::ESTATE_TYPE_FLATS_ROOMS_NEW_BUILDINGS,
        self::ESTATE_SUB_TYPE_ROOM => self::ESTATE_TYPE_FLATS_ROOMS_NEW_BUILDINGS,
        self::ESTATE_SUB_TYPE_HOUSE => self::ESTATE_TYPE_HOUSES_AREAS,
        self::ESTATE_SUB_TYPE_AREA => self::ESTATE_TYPE_HOUSES_AREAS,
        self::ESTATE_SUB_TYPE_OFFICE => self::ESTATE_TYPE_COMMERCE,
        self::ESTATE_SUB_TYPE_WAREHOUSE => self::ESTATE_TYPE_COMMERCE,
        self::ESTATE_SUB_TYPE_COMMERCIAL_PLACE => self::ESTATE_TYPE_COMMERCE,
        self::ESTATE_SUB_TYPE_PRODUCTION => self::ESTATE_TYPE_COMMERCE,
        self::ESTATE_SUB_TYPE_CAFE_BAR_RESTAURANT => self::ESTATE_TYPE_COMMERCE,
        self::ESTATE_SUB_TYPE_PLACE_FREE_USE => self::ESTATE_TYPE_COMMERCE,
        self::ESTATE_SUB_TYPE_GARAGE => self::ESTATE_TYPE_GARAGE,
        self::ESTATE_SUB_TYPE_PARKING_PLACE => self::ESTATE_TYPE_GARAGE,
    ];
    /** @var [] */
    private $allowedEstateSubTypes = [
        self::ESTATE_SUB_TYPE_FLAT => 'Квартира',
        self::ESTATE_SUB_TYPE_ROOM => 'Комната',
        self::ESTATE_SUB_TYPE_HOUSE => 'Дом, дача, коттедж',
        self::ESTATE_SUB_TYPE_AREA => 'Участок',
        self::ESTATE_SUB_TYPE_OFFICE => 'Офисы',
        self::ESTATE_SUB_TYPE_WAREHOUSE => 'Склад',
        self::ESTATE_SUB_TYPE_COMMERCIAL_PLACE => 'Торговое помещение',
        self::ESTATE_SUB_TYPE_PRODUCTION => 'Производство',
        self::ESTATE_SUB_TYPE_CAFE_BAR_RESTAURANT => 'Кафе бары рестораны',
        self::ESTATE_SUB_TYPE_PLACE_FREE_USE => 'Помещение Свободного Назначения',
        self::ESTATE_SUB_TYPE_GARAGE => 'Гараж',
        self::ESTATE_SUB_TYPE_PARKING_PLACE => 'Машиноместо',
    ];

    const DEAL_TYPE_SELL = 1;
    const DEAL_TYPE_SHORT_RENT = 2;
    const DEAL_TYPE_LONG_RENT = 3;
    /** @var [] */
    private $allowedDealTypes = [
        self::DEAL_TYPE_SELL => 'Продажа',
        self::DEAL_TYPE_SHORT_RENT => 'Посуточная аренда',
        self::DEAL_TYPE_LONG_RENT => 'Длительная аренда',
    ];

    /** @var int */
    private $id;
    /** @var int */
    private $dealType;
    /** @var int */
    private $estateSubtype;
    /** @var int */
    private $isNewBuilding = false;
    /** @var string */
    private $buildingName;
    /** @var Address */
    private $address;

    /**
     * @return int
     */
    public function getEstateSubtype()
    {
        return $this->estateSubtype;
    }

    /**
     * @param int $estateSubtype
     * @throws \Exception
     */
    public function setEstateSubType($estateSubtype)
    {
        if (!array_key_exists($estateSubtype, $this->allowedEstateSubTypes)) {
            throw new \Exception(sprintf('Estate sub type "%s" is not allowed.', $estateSubtype));
        }
        $this->estateSubtype = $estateSubtype;
    }

    public function setIsNewBuilding()
    {
        $this->isNewBuilding = true;
    }


    public function setIsOldBuilding()
    {
        $this->isNewBuilding = false;
    }

    /**
     * @return int
     */
    public function getDealType()
    {
        return $this->dealType;
    }

    /**
     * @param int $dealType
     * @throws \Exception
     */
    public function setDealType($dealType)
    {
        if (!array_key_exists($dealType, $this->allowedDealTypes)) {
            throw new \Exception(sprintf('Deal type "%s" is not allowed.', $dealType));
        }
        $this->dealType = $dealType;
    }

    /**
     * @return string
     */
    public function getBuildingName()
    {
        return $this->buildingName;
    }

    /**
     * @param string $buildingName
     */
    public function setBuildingName($buildingName)
    {
        $this->buildingName = $buildingName;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address $address
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;
    }
}

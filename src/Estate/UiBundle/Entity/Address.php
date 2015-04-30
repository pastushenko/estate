<?php
namespace Estate\UiBundle\Entity;

class Address
{
    const METRO_TRANSPORT_TYPE_CAR = 1;
    const METRO_TRANSPORT_TYPE_ON_FOOT = 2;
    /** @var [] */
    private $allowedMetroTransportTypes = [
        self::METRO_TRANSPORT_TYPE_CAR => 'Транспортом',
        self::METRO_TRANSPORT_TYPE_ON_FOOT => 'Пешком'
    ];

    /** @var int */
    private $id;
    /** @var Region */
    private $region;
    /** @var string */
    private $localityName;
    /** @var string */
    private $street;
    /** @var string */
    private $houseNumber;
    /** @var string */
    private $houseBlock;
    /** @var Metro */
    private $metro;
    /** @var int */
    private $metroTimeMinutes;
    /** @var string */
    private $metroTransportType;
    /** @var District */
    private $district;

    /**
     * @return Region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param Region $region
     */
    public function setRegion(Region $region)
    {
        $this->region = $region;
    }

    /**
     * @return string
     */
    public function getLocalityName()
    {
        return $this->localityName;
    }

    /**
     * @param string $localityName
     */
    public function setLocalityName($localityName)
    {
        $this->localityName = $localityName;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    /**
     * @param string $houseNumber
     */
    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;
    }

    /**
     * @return string
     */
    public function getHouseBlock()
    {
        return $this->houseBlock;
    }

    /**
     * @param string $houseBlock
     */
    public function setHouseBlock($houseBlock)
    {
        $this->houseBlock = $houseBlock;
    }

    /**
     * @return Metro
     */
    public function getMetro()
    {
        return $this->metro;
    }

    /**
     * @param Metro $metro
     */
    public function setMetro(Metro $metro)
    {
        $this->metro = $metro;
    }

    /**
     * @return int
     */
    public function getMetroTimeMinutes()
    {
        return $this->metroTimeMinutes;
    }

    /**
     * @param int $metroTimeMinutes
     */
    public function setMetroTimeMinutes($metroTimeMinutes)
    {
        $this->metroTimeMinutes = $metroTimeMinutes;
    }

    /**
     * @return string
     */
    public function getMetroTransportType()
    {
        return $this->metroTransportType;
    }

    /**
     * @param $metroTransportType
     * @throws \Exception
     */
    public function setMetroTransportType($metroTransportType)
    {
        if (!array_key_exists($metroTransportType, $this->allowedMetroTransportTypes)) {
            throw new \Exception(sprintf('Metro transport type "%s" is not allowed.', $metroTransportType));
        }
        $this->metroTransportType = $metroTransportType;
    }

    /**
     * @return District
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @param District $district
     */
    public function setDistrict(District $district)
    {
        $this->district = $district;
    }

}

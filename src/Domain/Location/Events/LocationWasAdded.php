<?php


namespace App\Domain\Location\Events;


use App\Domain\Event\DomainEvent;
use App\Domain\Location\Model\Location;

class LocationWasAdded implements DomainEvent
{
    const ADD_LOCATION_EVENT_REQUEST = 'add_location_request_event';

    /** @var Location */
    private $location;
    /** @var \DateTime */
    private $occuredOn;

    public function __construct(Location $location)
    {
        $this->location = $location;
        $this->occuredOn = new \DateTime();
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @return \DateTime
     */
    public function getOccuredOn(): \DateTime
    {
        return $this->occuredOn;
    }

    /**
     * @param \DateTime $occuredOn
     */
    public function setOccuredOn(\DateTime $occuredOn): void
    {
        $this->occuredOn = $occuredOn;
    }

    /**
     * @return \DateTime
     */
    public function occurredOn()
    {
        return $this->occuredOn;
    }
}

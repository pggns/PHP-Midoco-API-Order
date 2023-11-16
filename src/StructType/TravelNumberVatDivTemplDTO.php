<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelNumberVatDivTemplDTO StructType
 * @subpackage Structs
 */
class TravelNumberVatDivTemplDTO extends AbstractStructBase
{
    /**
     * The travelNo
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * The vatDivTemplId
     * @var int|null
     */
    protected ?int $vatDivTemplId = null;
    /**
     * Constructor method for TravelNumberVatDivTemplDTO
     * @uses TravelNumberVatDivTemplDTO::setTravelNo()
     * @uses TravelNumberVatDivTemplDTO::setVatDivTemplId()
     * @param string $travelNo
     * @param int $vatDivTemplId
     */
    public function __construct(?string $travelNo = null, ?int $vatDivTemplId = null)
    {
        $this
            ->setTravelNo($travelNo)
            ->setVatDivTemplId($vatDivTemplId);
    }
    /**
     * Get travelNo value
     * @return string|null
     */
    public function getTravelNo(): ?string
    {
        return $this->travelNo;
    }
    /**
     * Set travelNo value
     * @param string $travelNo
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberVatDivTemplDTO
     */
    public function setTravelNo(?string $travelNo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNo) && !is_string($travelNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNo, true), gettype($travelNo)), __LINE__);
        }
        $this->travelNo = $travelNo;
        
        return $this;
    }
    /**
     * Get vatDivTemplId value
     * @return int|null
     */
    public function getVatDivTemplId(): ?int
    {
        return $this->vatDivTemplId;
    }
    /**
     * Set vatDivTemplId value
     * @param int $vatDivTemplId
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberVatDivTemplDTO
     */
    public function setVatDivTemplId(?int $vatDivTemplId = null): self
    {
        // validation for constraint: int
        if (!is_null($vatDivTemplId) && !(is_int($vatDivTemplId) || ctype_digit($vatDivTemplId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vatDivTemplId, true), gettype($vatDivTemplId)), __LINE__);
        }
        $this->vatDivTemplId = $vatDivTemplId;
        
        return $this;
    }
}

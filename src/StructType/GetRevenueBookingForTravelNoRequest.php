<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRevenueBookingForTravelNoRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetRevenueBookingForTravelNoRequest extends AbstractStructBase
{
    /**
     * The travelNo
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * Constructor method for GetRevenueBookingForTravelNoRequest
     * @uses GetRevenueBookingForTravelNoRequest::setTravelNo()
     * @uses GetRevenueBookingForTravelNoRequest::setItemId()
     * @param string $travelNo
     * @param int $itemId
     */
    public function __construct(?string $travelNo = null, ?int $itemId = null)
    {
        $this
            ->setTravelNo($travelNo)
            ->setItemId($itemId);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetRevenueBookingForTravelNoRequest
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
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\GetRevenueBookingForTravelNoRequest
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
}

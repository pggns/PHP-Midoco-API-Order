<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerInfosRailDTO StructType
 * @subpackage Structs
 */
class PassengerInfosRailDTO extends AbstractStructBase
{
    /**
     * The bahncard
     * @var string|null
     */
    protected ?string $bahncard = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The passengerKey
     * @var string|null
     */
    protected ?string $passengerKey = null;
    /**
     * The positionNo
     * @var int|null
     */
    protected ?int $positionNo = null;
    /**
     * Constructor method for PassengerInfosRailDTO
     * @uses PassengerInfosRailDTO::setBahncard()
     * @uses PassengerInfosRailDTO::setItemId()
     * @uses PassengerInfosRailDTO::setPassengerKey()
     * @uses PassengerInfosRailDTO::setPositionNo()
     * @param string $bahncard
     * @param int $itemId
     * @param string $passengerKey
     * @param int $positionNo
     */
    public function __construct(?string $bahncard = null, ?int $itemId = null, ?string $passengerKey = null, ?int $positionNo = null)
    {
        $this
            ->setBahncard($bahncard)
            ->setItemId($itemId)
            ->setPassengerKey($passengerKey)
            ->setPositionNo($positionNo);
    }
    /**
     * Get bahncard value
     * @return string|null
     */
    public function getBahncard(): ?string
    {
        return $this->bahncard;
    }
    /**
     * Set bahncard value
     * @param string $bahncard
     * @return \Pggns\MidocoApi\Order\StructType\PassengerInfosRailDTO
     */
    public function setBahncard(?string $bahncard = null): self
    {
        // validation for constraint: string
        if (!is_null($bahncard) && !is_string($bahncard)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bahncard, true), gettype($bahncard)), __LINE__);
        }
        $this->bahncard = $bahncard;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PassengerInfosRailDTO
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
    /**
     * Get passengerKey value
     * @return string|null
     */
    public function getPassengerKey(): ?string
    {
        return $this->passengerKey;
    }
    /**
     * Set passengerKey value
     * @param string $passengerKey
     * @return \Pggns\MidocoApi\Order\StructType\PassengerInfosRailDTO
     */
    public function setPassengerKey(?string $passengerKey = null): self
    {
        // validation for constraint: string
        if (!is_null($passengerKey) && !is_string($passengerKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerKey, true), gettype($passengerKey)), __LINE__);
        }
        $this->passengerKey = $passengerKey;
        
        return $this;
    }
    /**
     * Get positionNo value
     * @return int|null
     */
    public function getPositionNo(): ?int
    {
        return $this->positionNo;
    }
    /**
     * Set positionNo value
     * @param int $positionNo
     * @return \Pggns\MidocoApi\Order\StructType\PassengerInfosRailDTO
     */
    public function setPositionNo(?int $positionNo = null): self
    {
        // validation for constraint: int
        if (!is_null($positionNo) && !(is_int($positionNo) || ctype_digit($positionNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionNo, true), gettype($positionNo)), __LINE__);
        }
        $this->positionNo = $positionNo;
        
        return $this;
    }
}
